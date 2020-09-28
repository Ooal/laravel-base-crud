@extends('layouts.layout1')
@section('content')
  <h1><a href="{{route('index')}}">Pagamenti</a></h1>
  <div class="login-box">
    <h1>EDIT PAGAMENTO</h1>
    <form action="{{route('update' , $pagamento -> id)}}" method="post">
      @csrf
      @method('POST')

      <div class="user-box">
        <input type="text" name="status" value="{{$pagamento -> status}}">
      </div>
      <div class="user-box">
        <input type="text" name="price" value="{{$pagamento -> price}}">
      </div>
      <button type="submit">Update</button>
    </form>
  </div>

@endsection
