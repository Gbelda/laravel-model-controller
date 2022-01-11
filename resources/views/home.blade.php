@extends('layouts.app')

@section('content')
    <h1>Movies</h1>

    @foreach ($movies as $movie)

        <div class="card">
            <div class="title">
                <h2>{{ $movie->title }}</h2>
                <h4>{{ $movie->original_title }}</h5>
            </div>

            <div class="data">
                <h5>{{ $movie->nationality }}</h5>
                <h5>Vote: {{ $movie->vote }}</h5>
                <h5>Release Year: {{ date('Y', strtotime($movie->date)) }}</h5>
            </div>
        </div>
    @endforeach

@endsection
