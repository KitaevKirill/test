@extends('layouts.app')

@section('content')
    <div class="container">

        <form method="post">

            {{ csrf_field() }}

            <div>
                <textarea name="title" placeholder="title" required>{{isset($article)?$article->title:''}}</textarea>
            </div>

            <div>
                <textarea name="text" placeholder="text" required>{{isset($article)?$article->text:''}}</textarea>
            </div>

            <div>
                <button type="submit" formaction="/articles">Add article</button>
                <button type="submit" formaction="/articles/preview">Preview article</button>
            </div>
        </form>
    </div>
{{old('text')}}
@endsection