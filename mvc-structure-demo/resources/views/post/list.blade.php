@extends('layout')

@section('title')
<title>Page Title</title>
@endsection

@section('content')
<div class="max-w-screen-lg mx-auto my-8">
    {% for post in posts %}
    <h2 class="text-2xl font-semibold underline mb-2"><a href="{% url 'show' post.pk %}">{{ post.title }}</a></h2>
    <p class="mb-4">{{ post.content | truncatewords:50 }}</p>
    {% endfor %}
</div>
@endsection
