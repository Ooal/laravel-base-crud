@extends('layouts.layout1')
@section('content')
  <h1><a href="{{route('index')}}">Posts</a></h1>
  <div class="login-box">
    <h1>NEW POST</h1>
    <form action="{{route('store')}}" method="post">
      @csrf
      @method('POST')

      <div class="user-box">
        <input type="text" name="title" value="">
        <label for="title">title</label>
      </div>
      <div class="user-box">
        <input type="text" name="text" value="">
        <label for="text">text</label>
      </div>
      <div class="user-box">
        <input type="text" name="category" value="">
        <label for="category">category</label>
      </div>
      <div class="user-box">
        <input type="text" name="like" value="">
        <label for="like">like</label>
      </div>
      <div class="user-box">
        <input type="text" name="dislike" value="">
        <label for="dislike">dislike</label>
      </div>
      <button type="submit">Create</button>
    </form>
  </div>

@endsection
