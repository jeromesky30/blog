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
        <!-- Blog Post -->
        <div class="col-md-9 bg-light">
          <div class="fw-bold fs-3">{{ $post->title }}</div>
          <p>{{ $post->content }}</p>
          <p>Posted on {{ $post->created_at->format('M d, Y') }}</p>
          @if(Auth::user()->usertype == 'admin')
          <div class="d-flex justify-content-end">
            {{-- <a href="{{ route('edit', $post->id) }}" class="btn btn-primary btn-sm mx-1">Edit</a> --}}
            {{-- <a href="{{ route('deletepost', $post->id) }}" class="btn btn-primary btn-sm mx-1">Delete</a> --}}
         </div>
         @endif
        </div>

  </div>
</div>



  
@endsection



