@extends('layout')

@section('meta')
    <meta name="description" content="{{ $description }}" />
    <title>{{ $name }}</title>
@endsection

@section('content')
    <div class="text-center mt-5">
        <h1>Success!</h1>
    </div>
@endsection
