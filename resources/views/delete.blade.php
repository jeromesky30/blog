@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Delete Post</h1>
        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
            @csrf
            @method('DELETE')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" readonly>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="10" readonly>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-danger">Delete Post</button>
        </form>
    </div>
@endsection
