@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row row-cols-3 d-flex justify-content-center align-items-center">
            @foreach ($movies as $item)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $item->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>{{ $item->title }}</h5>
                            <p>Titolo originale: {{ $item->original_title }}</p>
                            <p>Uscito il: {{ $item->date }}</p>
                            <p>Voto: {{ $item->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
