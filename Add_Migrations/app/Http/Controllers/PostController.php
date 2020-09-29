<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index() {
  $posts = Post::all();
  return view('posts', compact('posts'));
  }
  public function show($id) {
    $post = Post::findOrFail($id);
    return view('post', compact('post'));
  }
  public function destroy($id) {
    $post = Post::findOrFail($id);
    $post -> delete();
    return redirect() -> route('index');
  }
  public function edit($id) {
    $post = Post::findOrFail($id);
    ;return view('edit', compact('post'));
  }
  public function update(Request $request ,$id ) {
    $data = $request -> all();
    $post = Post::findOrFail($id);
    $post -> update($data);
    return redirect() -> route('index');
  }
  public function create() {
  return view('create');
  }
  public function store(Request $request) {
  $data = $request -> all();
  $post = Post::create($data);
  return redirect() -> route('index');
  }
}
