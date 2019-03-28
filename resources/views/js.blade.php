@extends('layouts.app')

@section('content')
    <div class="container">
        <input type="text" id="input" value="test">
        <input type="submit" onclick="buttonClick();">
        <br>
        <ol style="margin-top: 10px; list-style-type: inherit">
            <li>элемент нумерованного списка</li>
            <li>элемент нумерованного списка</li>
            <li>элемент нумерованного списка</li>
            <li>элемент нумерованного списка</li>
            <li>элемент нумерованного списка</li>
            <li>элемент нумерованного списка</li>
            <li>элемент нумерованного списка</li>
            <li>элемент нумерованного списка</li>
            <li>элемент нумерованного списка</li>
            <li>элемент нумерованного списка</li>
        </ol>


        <script>
            function buttonClick() {
                var input = document.getElementById('input');

                function randomInteger(min, max) {
                    let rand = min - 0.5 + Math.random() * (max - min + 1)
                    rand = Math.round(rand);
                    return rand;
                }

                let i = randomInteger(1, 4) ;

                if (i == 1) {input.style.color = 'green';}
                else if (i == 2) {input.style.color = 'red';}
                else if (i == 3) {input.style.color = 'blue';}
                else  {input.style.color = 'yellow';}

            }
        </script>
    </div>
@endsection



