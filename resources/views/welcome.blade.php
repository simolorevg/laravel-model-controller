@extends('layouts.app')
@section('content')
    <div class="my-container">
        <div class="movie-card-container">
            @foreach ($movies as $item)
                <div class="movie-card">
                    <div class="movie-img">
                        <img src="{{ $item->image }}" alt="{{ $item->title }}">
                    </div>
                    <div class="movie-text text-center">
                        <h5>{{ $item->title }}</h5>
                        <p>Uscito il: {{ $item->date }}. Voto: {{ $item->vote }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
