@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    @foreach ($movies as $movie)
    <h1><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></h1>
    @endforeach
</main>

@endsection
