@extends('templates.base')

@section('pageTitle', 'Home')

@section('pageMain')
    <main>

            @foreach ($movies as $movie)

              <h1>{{$movie->title}}</h1>


            @endforeach


    </main>


@endsection
