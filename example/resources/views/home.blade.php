@extends('layout')

@section('meta')
    <meta name="description" content="{{ $description }}" />
    <title>{{ $name }}</title>
@endsection

@section('content')
    <div class="text-center mt-5">
        <img src="{{ $logo }}" width="200px">
        <h1>{{ $name }}</h1>
        <p>{{ $description }}</p>
    </div>
@endsection
