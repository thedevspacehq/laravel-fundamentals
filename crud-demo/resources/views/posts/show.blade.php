@extends('layout')

@section('title')
<title>{{ $post->title }}</title>
@endsection

@section('content')
<div class="max-w-screen-lg mx-auto my-8">

    <h2 class="text-2xl font-semibold underline mb-2">{{ $post->title }}</h2>
    <p class="mb-4">{{ $post->content }}</p>

    <div class="grid grid-cols-2 gap-x-2">
        <a href="{{ route('posts.edit', ['post' => $post->id]) }}"
            class="font-sans text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm w-full px-5 py-2.5 text-center">Update</a>
        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit"
                class="font-sans text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-md text-sm w-full px-5 py-2.5 text-center">Delete</button>
        </form>
    </div>
</div>
@endsection