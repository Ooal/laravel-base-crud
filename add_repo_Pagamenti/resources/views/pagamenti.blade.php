@extends('layouts.layout1')
@section('content')
  <h1>Pagamenti</h1>
  <ul>
    @foreach ($pagamenti as $pagamento)
      <li>
        <a href="{{route('show', $pagamento -> id)}}">Status :{{$pagamento -> status}} Price :{{$pagamento -> price}}</a>
        <a href="{{route('edit', $pagamento -> id)}}">E</a>
        <a href="{{route('destroy', $pagamento -> id)}}">X</a>
      </li>
    @endforeach
  </ul>
@endsection
