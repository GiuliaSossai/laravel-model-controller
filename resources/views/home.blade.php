@extends('layouts.main')

@section('content')

    <div class="container">
        <h1>movie home</h1>
    </div>

    <div class="container">
        <table class="table">
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
                    <th scope="row">1</th>
                    <td>{{ $movie->title}}</td>
                    <td>{{ $movie->original_title}}</td>
                    <td>{{ $movie->nationality}}</td>
                    <td>{{ $movie->date}}</td>
                    <td>{{ $movie->vote}}</td>
                </tr>
            @endforeach
                
                
            </tbody>
        </table>
    </div>
    
@endsection