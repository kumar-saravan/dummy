<h1>Posts</h1>

<a href="{{ route('posts.create') }}">Create New Post</a>

<ul>
    @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        </li>
    @endforeach
</ul>
