<!-- List of posts -->
<div class="grid grid-cols-3 gap-4">
    @foreach ($posts as $post)
    <!-- post -->
    <div class="mb-4 ring-1 ring-slate-200 rounded-md h-fit hover:shadow-md">
        <a href="{{ route('post', ['post' => $post->id]) }}"><img class="rounded-t-md object-cover h-60 w-full" src="{{ Storage::url($post->cover) }}" alt="..." /></a>
        <div class="m-4 grid gap-2">
            <div class="text-sm text-gray-500">
                {{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}
            </div>
            <h2 class="text-lg font-bold">{{ $post->title }}</h2>
            <p class="text-base">
                {{ Str::limit(strip_tags($post->content), 150, '...') }}
            </p>
            <a class="bg-blue-500 hover:bg-blue-700 rounded-md p-2 text-white uppercase text-sm font-semibold font-sans w-fit focus:ring" href="{{ route('post', ['post' => $post->id]) }}">Read more →</a>
        </div>
    </div>
    @endforeach
</div>

{{ $posts->links() }}