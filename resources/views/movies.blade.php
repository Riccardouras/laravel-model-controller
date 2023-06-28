@extends('layouts.app')
@section('content')
@foreach ($movies as $movie)
    <div class="card">
        <h3>Titolo:{{ $movie->title }}</h3>
        <p>Descrizione:{{ $movie->description }}</p>
        <p>Titolo originale:{{$movie->original_title}}</p>
        <p>Nazione:{{$movie->nationality}}</p>
        <p>data:{{$movie->date}}</p>
        <p>voto: {{$movie->vote}}</p>
    </div>
@endforeach