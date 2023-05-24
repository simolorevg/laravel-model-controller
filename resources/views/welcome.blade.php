@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($movies as $item)
            <li>{{ $item->title }}</li>
        @endforeach
    </ul>
@endsection
