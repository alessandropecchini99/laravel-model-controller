@extends('layout.base')



@section('title', 'Movies')


@section('main')

    <div class="row row-cols-2 movies-container">

        @foreach($movies as $i => $movie)     

            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">
                            Nationalità: {{ $movie->nationality }}
                            <br>
                            Date: {{ $movie->date }}
                            <br>
                            Voto: {{ $movie->vote }}
                        </p>
                    </div>
                </div>
                <br>
            </div>

        @endforeach

    </div>

@endsection