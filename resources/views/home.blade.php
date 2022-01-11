@extends('layouts.app')
@section('custom-style', asset('css/home.css'))
@section('content')
    <header id="home_header">
        <h1>Avaiable movies</h1>
    </header>

    <main class="container">
        <div class="row">
            @forelse ($movies as $movie)
                <div class="col_3">
                    <div class="card">
                        <div class="card_title">
                            <h2>{{ $movie->title }}</h2>
                            <div class="og_title">{{ $movie->original_title }}</div>
                        </div>
                        <div class="card_body">
                            <div>{{ $movie->nationality }}</div>
                            <div class="movie_vote">{{ $movie->vote }}</div>

                            <div>{{ $movie->date }}</div>
                        </div>
                    </div>
                </div>
            @empty
                <h3>It appears empty in here.</h3>

            @endforelse
        </div>
    </main>
@endsection
