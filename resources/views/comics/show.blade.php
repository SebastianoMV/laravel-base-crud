@extends('layout.main')

@section('content')

  <div class="container d-flex flex-wrap justify-content-center">
      <div class="card m-3 d-flex flex-column justify-content-between card-show">
        {{$comic->title}}
        <div class="d-flex flex-column">
          <img src="{{$comic->image}}" alt="">
          <a class="btn btn-primary" href="{{ route('comics.index')}}">Back</a>
          <a class="btn btn-primary" href="{{ route('comics.edit', $comic)}}">Edit</a>
        </div>
      </div>
  </div>
   
@endsection