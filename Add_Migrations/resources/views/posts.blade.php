@extends('layouts.layout1')
@section('content')
  <h1>Posts</h1>
  <ul>
    @foreach ($posts as $post)
      <li>
        <a href="{{route('show', $post -> id)}}">{{$post -> title}} {{$post -> category}} </a>
        <a href="{{route('edit', $post -> id)}}">E</a>
        <a href="{{route('destroy', $post -> id)}}">X</a>
      </li>
    @endforeach
  </ul>
  <h2><a href="{{route('create')}}">New Post</a></h2>
@endsection
