@extends('layouts.app')

@section('content')

    {{ csrf_field() }}
    <a href="/articless">Список</a><br>
    <a href="/articles/create">Добавить статью</a><br>
    <table border="1">
        <tr>
            <td>Title: {{ $article->title }} </td>
            <td>Text: {{ $article->text }}</td>
        </tr>
    </table>
    {{--<a href="/books/{{ ($book->id)-1 }}">&lt;&lt;&lt;</a>   <a href="/books/{{ ($book->id)+1 }}">&gt;&gt;&gt;</a>--}}
    <br>
        <a href="/articles/{{$article->id}}/edit">Edit</a><br>

        <a href="/articles/create">Edit</a><br>
<?= '<pre>' ?>
    <?= var_dump($article) ?>
<?= '</pre>' ?>
    {{--@if ($book->comments->count())--}}
    {{--Отзывы:<br>--}}
    {{--<div>--}}
    {{--@foreach($book->comments as $comment)--}}
    {{--<li>{{$comment->text}}</li>--}}
    {{--@endforeach--}}
    {{--</div>--}}
    {{--@endif--}}


@endsection