@extends('layouts.main')

@section('content')

    <div class="container">
        <h1>Home</h1>
    </div>

    <main class="container">
        <!-- <table class="table">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Original Title</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">Date</th>
                    <th scope="col">Vote</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($movies as $movie)
                <tr>
                    <th scope="row">{{ $movie->id}}</th>
                    <td>{{ $movie->title}}</td>
                    <td>{{ $movie->original_title}}</td>
                    <td>{{ $movie->nationality}}</td>
                    <td>{{ $movie->date}}</td>
                    <td>{{ $movie->vote}}</td>
                </tr>
            @endforeach
                
                
            </tbody>
        </table> -->


        <div class="movie-row row justify-content-between">
        @foreach ($movies as $movie)
                <div class="movie-box col-3 m-3 py-2">
                    <h2>{{ $movie->title}}</h2>
                    <p>Titolo originale: <strong>{{ $movie->original_title }}</strong> </p>
                    <p>Paese: <strong>{{ $movie->nationality }}</strong> </p>
                    <p>Data di uscita: <strong>{{ $movie->date }}</strong> </p>
                    <p>Voto: <strong>{{ $movie->vote }}</strong> </p>

                </div>
            @endforeach
        </div>
    </main>
    
@endsection