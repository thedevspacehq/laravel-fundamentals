@extends('layout')

@section('title')
<title>Page Title</title>
@endsection

@section('content')
<div class="my-4">
    @include('vendor.list')

    @include('vendor.sidebar')
</div>
@endsection