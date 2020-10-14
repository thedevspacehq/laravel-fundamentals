@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="author" content="Eric Hu">
@endsection

@section('title')
    <title>{{setting('site.title')}}</title>
@endsection

@section('content')
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Laravel Blog
                <small>Home Page</small>
            </h1>

            @include('vendor.posts-list')

        </div>
        @include('vendor.sidebar')
    </div>
@endsection
