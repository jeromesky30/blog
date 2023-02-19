<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
  public function create()
  {

    return view('create');
  }

  public function store(Request $request)
  {
    $post = new Post;
    $post->title = $request->title;
    $post->content = $request->content;

    $post->save();

    return redirect()->route('home')->with('success', 'New post has been added!');
  }

  public function show($id)
{
    $post = Post::find($id);

    if (!$post) {
        return redirect()->route('home')->with('error', 'Post not found!');
    }

    return view('displaypost', ['post' => $post]);
}

public function edit($id)
{
    $post = Post::find($id);
    return view('edit', compact('post'));
}


public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'title' => 'required',
        'content' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()
            ->route('posts.edit', $id)
            ->withErrors($validator)
            ->withInput();
    }

    $post = Post::find($id);
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();

    return redirect()->route('posts.show', $id)
        ->with('success', 'Post updated successfully');
}

public function delete($id)
{
    $post = Post::findOrFail($id);

    return view('delete', compact('post'));
}



}
