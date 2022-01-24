@extends('layouts.main')

@section('content')
    <main class="container">

        <div class="container mt-4">
            <h1>Home</h1>
        </div>

        <div class="movie-row row justify-content-between">
        @foreach ($movies as $movie)
                <div class="movie-box col-3 m-3 py-2">
                    <h2>{{ $movie->title}}</h2>
                    <p>Titolo originale: <strong>{{ $movie->original_title }}</strong> </p>
                    <p>Nazionalità: <strong>{{ $movie->nationality }}</strong> </p>
                    <p>Data di uscita: <strong>{{ $movie->date }}</strong> </p>
                    <p>Voto: <strong>{{ $movie->vote }}</strong> </p>
                </div>
            @endforeach
        </div>
    </main>
    
@endsection