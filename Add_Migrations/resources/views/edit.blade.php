@extends('layouts.layout1')
@section('content')
  <h1><a href="{{route('index')}}">Posts</a></h1>
  <div class="login-box">
    <h1>EDIT POST</h1>
    <form action="{{route('update' , $post -> id)}}" method="post">
      @csrf
      @method('POST')

      <div class="user-box">
        <input type="text" name="title" value="{{$post -> title}}">
      </div>
      <div class="user-box">
        <input type="text" name="text" value="{{$post -> text}}">
      </div>
      <div class="user-box">
        <input type="text" name="category" value="{{$post -> category}}">
      </div>
      <div class="user-box">
        <input type="text" name="like" value="{{$post -> like}}">
      </div>
      <div class="user-box">
        <input type="text" name="dislike" value="{{$post -> dislike}}">
      </div>
      <button type="submit">Update</button>
    </form>
  </div>

@endsection
