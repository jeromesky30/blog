@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Delete Post') }}</div>
        <div class="card-body">
          <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
            @csrf
            @method('DELETE')
            <div class="form-group">
              <label for="title">{{ __('Title') }}</label>
              <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}" readonly>
              @error('title')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="content">{{ __('Content') }}</label>
              <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" rows="5" readonly>{{ $post->content }}</textarea>
              @error('content')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
