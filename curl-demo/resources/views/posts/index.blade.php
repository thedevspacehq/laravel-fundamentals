@extends('layout')

@section('title')
<title>Page Title</title>
@endsection

@section('content')
<div class="max-w-screen-lg mx-auto my-8">
    @foreach($posts as $post)
    <h2 class="text-2xl font-semibold underline mb-2"><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
    <p class="mb-4">{{ Illuminate\Support\Str::words($post->content, 100) }}</p>
    @endforeach
</div>
@endsection
