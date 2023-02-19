{{-- @extends('layouts.app')

@section('content')
<!-- Post -->
<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-8">

      @if($post)
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->content }}</p>
          <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
        </div>
      </div>
      @else
      <div>Post not found.</div>
      @endif

    </div>
  </div>
</div>
@endsection --}}


@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <!-- Blog Post -->
      <div class="col-md-9 bg-light">
        <div class="fw-bold fs-3">{{ $post->title }}</div>
        <p>{{ $post->content }}</p>
        <p>Posted on {{ $post->created_at->format('M d, Y') }}</p>
      </div>
    </div>
  </div>
@endsection

<a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a>

