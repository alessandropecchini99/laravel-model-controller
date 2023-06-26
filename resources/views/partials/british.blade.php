@extends('layout.base')



@section('title', 'Even Movies')


@section('main')

    <div class="row british-container">

        @foreach($british as $i => $movie)     
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">
                            Titolo originale: {{ $movie->original_title }}
                            <br>
                            Nationalità: {{ $movie->nationality }}
                            <br>
                            Date: {{ $movie->date }}
                            <br>
                            Voto: {{ $movie->vote }}
                            <br>
                            ID: {{ $movie->id }}
                        </p>
                    </div>
                </div>
        @endforeach

@endsection
