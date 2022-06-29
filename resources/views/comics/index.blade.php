@extends('layout.main')

@section('content')

  <div class="container d-flex flex-wrap justify-content-center">
      @foreach($comics as $comic)
      <div class="card m-3">
        {{$comic->title}}
        <div class="d-flex flex-column">
          <img src="{{$comic->image}}" alt="">
          <a class="btn btn-primary" href="{{ route('comics.show', $comic)}}">Show</a>
        </div>
      </div>
      

      @endforeach
  </div>
   
@endsection