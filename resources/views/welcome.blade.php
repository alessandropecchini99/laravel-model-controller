@extends('layout.base')



@section('title', 'Home')


@section('main')

    <div class="home">
        <h1>WELCOME!</h1>
        <h3> WE HAVE {{ $count }} MOVIES IN THE DATABASE</h3>
    </div>

@endsection