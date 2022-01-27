<!-- Blog entries -->
<div class="col-lg-8">
    <!-- Nested row for non-featured blog posts -->
    <div class="row">
        @foreach ($posts as $post)
            <!-- Blog post-->
            <div class="col-md-6">
                <div class="card mb-4 px-md-0">
                    <a href="{{ route('post.show', ['slug' => $post->slug]) }}"><img class="card-img-top"
                            src="{{ Storage::url($post->featured_image) }}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}
                        </div>
                        <h2 class="card-title h4">{{ $post->title }}</h2>
                        <p class="card-text">{{ Str::limit(strip_tags($post->content), 150, '...') }}</p>
                        <a class="btn btn-primary" href="{{ route('post.show', ['slug' => $post->slug]) }}">Read more
                            →</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Pagination-->
    <nav aria-label="Pagination">
        <hr class="my-0" />
        <ul class="pagination justify-content-center my-4">
            {{ $posts->links() }}
        </ul>
    </nav>
</div>
