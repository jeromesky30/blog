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
        <a href="{{ route('home') }}" class="btn btn-primary btn-sm mt-2">All Blogs</a>
        @if(Auth::user()->usertype == 'admin')
        <a href="{{ route('create') }}" class="btn btn-primary btn-sm mt-2">+ New Blog</a>
        @endif
      </div>
    </div>

    <!-- Delete Post -->
    <div class="col-md-9 bg-light">
      <div class="fw-bold fs-3">Are you sure you want to delete this post?</div>
      <p>{{ $post->title }}</p>
      <form action="{{ route('delete', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Post</button>
        <a href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
    </form>
    </div>
  </div>
</div>

@endsection
