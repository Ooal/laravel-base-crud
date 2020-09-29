@extends('layouts.layout1')
@section('content')
  <h1>Posts</h1>
  <p>title : {{$post -> title}}</p>
  <p>{{$post -> text}}</p>
  <p>category : {{$post -> category}}</p>
  <p>like : {{$post -> like}}</p>
  <p>dislike : {{$post -> dislike}}</p>

  <h2><a href="{{route('index')}}">Posts</a></h2>
@endsection
