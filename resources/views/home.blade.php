@extends('layout.main')

@section('content')

  <div class="container">
    <h1>Home</h1>
    <a class="btn btn-primary" href="{{ route('comics.create')}}">Create</a>
  </div>
   
@endsection