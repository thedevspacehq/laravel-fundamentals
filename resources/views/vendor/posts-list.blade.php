@foreach($posts as $post)
    <!-- Blog Post -->
    <div class="card mb-4">
        <img class="card-img-top" src="{{\Illuminate\Support\Facades\Storage::url($post['featured_image'])}}" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">{{$post['title']}}</h2>
            <p class="card-text">{{\Illuminate\Support\Str::limit(strip_tags($post['content']), 200, '...')}}</p>
            <a href="/post/{{$post['slug']}}" class="btn btn-primary">Read More →</a>
        </div>
        <div class="card-footer text-muted">
            Posted on {{$post->created_at->format('M d Y')}} by
            <a href="#">{{$post->user['name']}}</a>
        </div>
    </div>
@endforeach
