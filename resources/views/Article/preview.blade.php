@extends('layouts.app')

@section('content')

    <table border="1">
        <tr>
            <td>Title: {{ $article->title }} </td>
            <td>Text: {{ $article->text }}</td>
        </tr>
    </table>
    <br>

    <a href="/articles/create">Edit</a><br>
    <a href="/articles/preview/save">Save</a><br>



    <?= '<pre>' ?>
    <?= var_dump($article) ?>
    <?= '</pre>' ?>



@endsection