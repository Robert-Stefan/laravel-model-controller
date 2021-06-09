@extends('layouts/main')

@section('content')
    <main>
        <section>
            <h1>Film List</h1>
            <div class="cards">
                @foreach ($movies as $movie)
                    <div class="card">
                        <div>Titolo: {{ $movie->title }}</div>
                        <div>Titolo Originale: {{ $movie->original_title }}</div>
                        <div>Nazionalità: {{ $movie->nationality }}</div>
                        <div>Data: {{ $movie->date }}</div>
                        <div>Voto: {{ $movie->vote }}</div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection