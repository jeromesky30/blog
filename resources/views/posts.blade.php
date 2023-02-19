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

    <!-- All Blog Posts -->
    {{-- start of right panel --}}
    <div class="col-md-9 bg-light">
      <div class="fw-bold fs-3">My Daily Blog</div>
      <!-- Success and Error Alerts -->
      @if( session('success') )
        <div class="alert alert-success my-3" role="alert">
          {{ session('success') }}
        </div>
      @endif

      @if( session('error') )
        <div class="alert alert-danger my-3" role="alert">
          {{ session('error') }}
        </div>
      @endif

      <!-- Blog Posts Preview -->
        {{-- start of cards --}}
      @if(count($posts) > 0)
      @foreach($posts as $post)
      <div class="card my-3 py-2 bg-white">
        <div class="row g-0">
          {{-- <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div> --}}
          <div class="col-md">
           <div class="card-body">
              <h5 class="card-title"><a href="{{ route('displaypost', $post->id) }}">{{ $post->title }}</a></h5>
              <p class="card-text">{{ Str::limit($post->content, 200) }}</p>
              <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
             
           </div> 
           @if(Auth::user()->usertype == 'admin')
           <div class="d-flex justify-content-end">
             <a href="{{ route('edit', $post->id) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
             <a class="btn btn-sm btn-primary" href="{{ route('destroy', $post->id) }}">Delete Post</a>
          </div>
          @endif
          </div>
          
        </div>
        </div>
        @endforeach
      @else
      <div class="my-3 py-2 bg-white">There are no posts yet</div>

      @endif
        {{-- end of card --}}

      </div>
      {{-- end of right panel --}}
      
    </div>

  </div>
{{-- </div>
</div>
</div> --}}


@endsection