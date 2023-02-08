@extends('layout')

@section('title')
<title>Create</title>
@endsection

@section('content')
<div class="w-96 mx-auto my-8">
    <h2 class="text-2xl font-semibold underline mb-4">Create new post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        {{ csrf_field() }}
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"
            class="p-2 w-full bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"><br>
        <br>
        <label for="content">Content:</label><br>
        <textarea type="text" id="content" name="content" rows="15"
            class="p-2 w-full bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"></textarea><br>
        <br>
        <button type="submit"
            class="font-sans text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm w-full px-5 py-2.5 text-center">Submit</button>
    </form>
</div>
@endsection