<?php

namespace App\Http\Controllers;

use App\Article;
use App\PostPreview;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();

        return view('article.articles', ['article' => $article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article = PostPreview::all()->last();

        return view('article.create', ['article' => $article]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'text' => 'required'
        ]);

        $article = new Article();

        $article->title = request('title');
        $article->text = request('text');


        $article->save();
        $date = PostPreview::all()->last();
        if (isset($date)) {
            $date->delete();
        }


        return redirect('/articles');
    }

    public function preview()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'text' => 'required'
        ]);

        $article = new PostPreview;

        $article->title = request('title');
        $article->text = request('text');

        $article->save();

        return view('article.preview', ['article' => $article]);
    }

    public function save()
    {
        $date = PostPreview::all()->last();

        $newArticle = new Article;

        $newArticle->title = $date->title;
        $newArticle->text = $date->text;

        $newArticle->save();
        $date->delete();

        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.view', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
