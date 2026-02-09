@extends('posts.layout')

@section('title', 'All Posts')

@section('content')
    <header>
        <h1>Posts</h1>
        <a href="/posts/create" class="btn">Create New Post</a>
    </header>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @forelse($posts as $post)
        <div class="post-item">
            <div class="post-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></div>
            <div class="post-content">{{ Str::limit($post->content, 150) }}</div>
            <div class="post-actions">
                <a href="/posts/{{ $post->id }}" class="btn btn-secondary">View</a>
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary">Edit</a>
                <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <p>No posts found. <a href="/posts/create">Create one now!</a></p>
    @endforelse
@endsection
