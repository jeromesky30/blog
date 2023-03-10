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

  public function displaypost($id)
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

      if (!$post) {
          return redirect()->route('home')->with('error', 'Post not found!');
      }

      return view('edit', ['post' => $post]);
  }

  public function update(Request $request, $id)
  {
      $validator = Validator::make($request->all(), [
          'title' => 'required',
          'content' => 'required',
      ]);

      if ($validator->fails()) {
          return redirect()
              ->route('edit', $id)
              ->withErrors($validator)
              ->withInput();
      }

      $post = Post::find($id);

      if (!$post) {
          return redirect()->route('home')->with('error', 'Post not found!');
      }

      $post->title = $request->title;
      $post->content = $request->content;
      $post->save();

      return redirect()->route('displaypost', $id)
            ->with('success', 'Post updated successfully');
  }




  public function destroy($id) 
  {
    $post = Post::find($id);

    $post->delete();
    return redirect()->route('home')->with('success', 'Post has been deleted!');
  
     
  }
}