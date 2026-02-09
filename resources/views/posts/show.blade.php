@extends('posts.layout')

@section('title', $post->title)

@section('content')
    <a href="/posts" class="back-link">← Back to Posts</a>
    
    <header>
        <h1>{{ $post->title }}</h1>
    </header>

    <div class="post-item">
        <div class="post-content">{{ $post->content }}</div>
        <small style="color: #999;">Created: {{ $post->created_at->format('M d, Y H:i') }}</small>
        @if($post->updated_at != $post->created_at)
            <br><small style="color: #999;">Updated: {{ $post->updated_at->format('M d, Y H:i') }}</small>
        @endif
        
        <div class="post-actions" style="margin-top: 20px;">
            <a href="/posts/{{ $post->id }}/edit" class="btn">Edit</a>
            <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
@endsection
