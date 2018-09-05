@extends('layout.app')

@section('content')

    @foreach ($commercants as $commercant)
        <h1>{{ $commercant->prenom }}</h1>
    @endforeach

@endsection