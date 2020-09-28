@extends('layouts.layout1')
@section('content')
  <h1>Pagamento</h1>
  <p>Status :  {{$pagamento -> status}}</p>
  <p>Price :  {{$pagamento -> price}}</p>
  <h2><a href="{{route('index')}}">Pagamenti</a></h2>
@endsection
