@extends('layouts.app')
@section('content')
@foreach ($movies as $movie)
    <div style="max-width: 500px" class="card">
        <h3>Titolo: {{ $movie->title }}</h3>
        <img style="width: 200px" src="{{$movie->img}}" alt="{{$movie->title}} ">
        <p>Descrizione: {{ $movie->description }}</p>
        <p>Titolo originale: {{$movie->original_title}}</p>
        <p>Nazione: {{$movie->nationality}}</p>
        <p>data: {{$movie->date}}</p>
        <p>voto: {{$movie->vote}}</p>
    </div>
@endforeach