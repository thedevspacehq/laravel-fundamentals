@extends('layout')

@section('meta')
    <meta name="description" content="create homepage" />
    <title>Create Homepage</title>
@endsection

@section('content')
    <br>
    <form action="/home" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="inputName" class="form-label">Website Name</label>
            <input type="text" class="form-control" id="inputName" name="name">
        </div>
        <div class="mb-3">
            <label for="inputDescription" class="form-label">Website Description</label>
            <textarea type="text" class="form-control" id="inputDescription" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="inputLogo" class="form-label">Choose a logo</label>
            <input type="file" class="form-control" id="inputLogo" name="logo">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection