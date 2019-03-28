<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use YandexMetrika;
//use Alexusmai\YandexMetrika\YandexMetrika;
use TCG\Voyager\Models\post;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function view()
    {
        $comment = Comment::all();
        $post = post::all();

        return view('post', ['comment' => $comment, 'post' => $post]);
    }

//    public function createComment()
//    {
//        return view('create');
//    }

    public function store()
    {
        $post = post::all()[0];

        $comment = new Comment();
        $comment->author_id = 1;
        $comment->article_id = $post->id;
        $comment->text = request('text');

        $comment->save();

        return redirect('/post');
    }

    public function metrica()
    {
//        dd(YandexMetrika::getVisitsUsersSearchEngine(60)->data['data']);

        $searchEngine = YandexMetrika::getVisitsUsersSearchEngine(60)->data['data'];
        $users = YandexMetrika::getVisits(60)->data['data']['0']['metrics'][1];
        $visits = YandexMetrika::getVisits(60)->data['data']['0']['metrics'][0];
        $denay = YandexMetrika::getDenay()->data['data']['0']['metrics'][0];
        $traffic = YandexMetrika::getTrafficSource(60)->data['data'];
//        dd(YandexMetrika::getReachesPerUser());

        return view('metric', ['visits' => $visits, 'denay' => $denay, 'users' => $users, 'searchEngine' => $searchEngine, 'traffic' => $traffic]);

//        Параметры запроса
//        $urlParams = [
//            'ids'           => '50995868',                        //id счетчика
//            'date1'         => Carbon::today()->subDays(60)->format('Y-m-d'),    //Начальная дата
//            'date2'         => Carbon::today()->format('Y-m-d'),                 //Конечная дата
//            'metrics'    => 'ym:s:visits,ym:s:pageviews,ym:s:users',
//            'filters' => "ym:s:visitDuration<5",
//        ];
//Запрос
//        dd(YandexMetrika::getDenay());

//        dd(YandexMetrika::getSourcesSearchPhrases(3)->adapt());
    }

    public function metricaExample()
    {
        dd(YandexMetrika::getTechPlatforms()->adapt());
    }
}
