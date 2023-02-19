@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <!-- Admin -->
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">{{ __('Hi,') }} {{ Auth::user()->name }}</div>
      </div>
      <div class="d-flex flex-column">
        @if(Auth::user()->usertype == 'admin')
        <a href="{{ route('home') }}" class="btn btn-primary btn-sm mt-2">All Blogs</a>
        <a href="{{ route('create') }}" class="btn btn-primary btn-sm mt-2">+ New Blog</a>
        @endif
      </div>
    </div>

    <!-- All Blog Posts -->
    <div class="col-md-9 bg-light">
      <div class="fw-bold fs-3">My Daily Blog</div>
      <!-- Success and Error Alerts -->
      @if( session('success') )
      <div class="container px-4">
        <div class="alert alert-success my-3" role="alert">
          {{ session('success') }}
        </div>
      </div>
      @endif

      @if( session('error') )
      <div class="container px-4">
        <div class="alert alert-danger my-3" role="alert">
          {{ session('error') }}
        </div>
      </div>
      @endif

      <!-- Create New Blog Form -->
      <form method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="10" required>{{ old('content', $post->content) }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update Post</button>
        </div>
    </form>

      <!-- All Blog Posts -->
      @foreach($posts as $post)
      <div class="card my-3">
        <div class="card-header fw-bold">
          {{ $post->title }}
          @if(Auth::user()->usertype == 'admin')
          <div class="float-end">
            <a href="{{ route('edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
            <a href="{{ route('delete', $post->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</a>
          </div>
          @endif
        </div>
        <div class="card-body">
          {{ $post->content }}
        </div>
      </div>
      @endforeach

    </div>

  </div>
</div>


@endsection
