@extends('layouts.app')

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
@endsection
