@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->original_title }}</p>
    <p>{{ $movie->language }}</p>
    <div style="width: 200px; height: 300px">
        <img class="w-100 h-100"
        src="{{ $movie->image }}" alt="{{ $movie->title }}">
    </div>

</main>

@endsection
