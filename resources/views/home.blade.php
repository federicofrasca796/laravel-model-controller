@extends('layouts.app')

@section('content')
    <h1>Avaiable movies</h1>

    <div class="container">
        <div class="row">
            @forelse ($movies as $movie)
                <div class="card">
                    <div class="card_title">
                        <h2>{{ $movie->title }}</h2>
                        <div>{{ $movie->original_title }}</div>
                    </div>
                    <div class="card_body">
                        <div>{{ $movie->nationality }}</div>
                        <div>{{ $movie->vote }}</div>

                        <div>{{ $movie->date }}</div>
                    </div>
                </div>
                <hr>
            @empty
                <h3>It appears empty in here.</h3>

            @endforelse
        </div>
    </div>
@endsection
