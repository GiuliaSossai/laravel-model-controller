@extends('layouts.main')

@section('content')

    <div class="container mt-4">
        <h1>Film</h1>
    </div>

    <main class="container">
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

            @foreach ($films as $film)
                <tr>
                    <th scope="row">{{ $film->id}}</th>
                    <td>{{ $film->title}}</td>
                    <td>{{ $film->original_title}}</td>
                    <td>{{ $film->nationality}}</td>
                    <td>{{ $film->date}}</td>
                    <td>{{ $film->vote}}</td>
                </tr>
            @endforeach
                
                
            </tbody>
        </table>
    </main>

@endsection