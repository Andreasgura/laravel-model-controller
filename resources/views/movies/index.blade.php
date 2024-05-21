@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    @foreach ($movies as $movie)
    <h1>{{ $movie->title }}</h1>
    @endforeach
</main>

@endsection
