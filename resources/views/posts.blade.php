@extends('layouts.app')

@section('content')
<!-- Dashboard -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Hi,') }} {{ Auth::user()->name }}</div>
      </div>
    </div>
  </div>
</div>

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


<!-- All Posts -->
<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <!-- <div class="card mb-3" style="max-width: 540px;"> -->
      @if(count($posts) > 0)
      @foreach($posts as $post)
      <div class="card mb-3">
        <div class="row g-0">
          <!-- <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div> -->
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->content }}</p>
              <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <div>There are no posts yet</div>
      @endif

    </div>
  </div>
</div>


@endsection