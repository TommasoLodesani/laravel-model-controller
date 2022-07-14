@extends('templates.base')

@section('pageTitle', 'Home')

@section('pageMain')
    <main>
        <ul>
            @foreach ($movies as $movie)
            <li>
                {{$movie->title}}
            </li>

            @endforeach

        </ul>
    </main>


@endsection
