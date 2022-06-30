@extends('layout.main')

@section('content')

  @if(session('fumetto_eliminato'))
    <div class="alert alert-success container" role="alert">
      {{ session('fumetto_eliminato')}}
    </div> 
  @endif
  

  <div class="container d-flex flex-wrap justify-content-center">
    
      @foreach($comics as $comic)
      <div class="card m-3 text-center">
        {{$comic->title}}
        <div class="d-flex flex-column justify-content-center">
          <img src="{{$comic->image}}" alt="">
          <a class="btn btn-primary" href="{{ route('comics.show', $comic)}}">Show</a>
          <a class="btn btn-primary" href="{{ route('comics.edit', $comic)}}">Edit</a>
        </div>
      </div>
      
      

      @endforeach
  </div>
   
@endsection