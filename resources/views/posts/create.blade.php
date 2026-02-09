@extends('posts.layout')

@section('title', 'Create Post')

@section('content')
    <a href="/posts" class="back-link">← Back to Posts</a>
    
    <header>
        <h1>Create New Post</h1>
    </header>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/posts" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            @error('title')
                <div class="errors">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" required>{{ old('content') }}</textarea>
            @error('content')
                <div class="errors">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn">Create Post</button>
        <a href="/posts" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
