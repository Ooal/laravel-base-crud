@extends('layouts.layout1')
@section('content')
  <h1>Paganti</h1>
  <ul>
    @foreach ($paganti as $pagante)
      <li>{{$pagante -> name}} {{$pagante -> lastname }} Address: {{$pagante ->  address}}</li>
    @endforeach
  </ul>
@endsection
