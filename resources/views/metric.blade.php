@extends('layouts.app')

@section('content')
    <div class="container">
        Количество уникальных посетителей за 60 дней: {{$users}}<br>
        Количество визитов за 60 дней: {{$visits}}<br>
        Количество отказов за 60 дней: {{$denay}}<br>

        Процент отказов: {{$denay/$visits}}<br>
        <hr>

        {{--@foreach($searchEngine as $search)--}}
        {{--{{$search[0]['dimensions']['0']['name']}}--}}
        {{--{{$search['dimensions']['0']['name']}} - {{$search['metric']['0']}}человек<br>--}}
        {{--@endforeach--}}
        <div>
            @for($i = 0; $i<8; $i++)
                {{$searchEngine[$i]['dimensions']['0']['name']}} - {{$searchEngine[$i]['metrics']['0']}} человек<br>
            @endfor
        </div>
        <hr>

        @for($i = 0; $i<8; $i++)
            {{$traffic[$i]['dimensions']['0']['name']}} - {{$searchEngine[$i]['metrics']['0']}} человек<br>
        @endfor
    </div>
@endsection
