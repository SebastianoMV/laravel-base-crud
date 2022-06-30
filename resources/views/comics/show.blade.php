@extends('layout.main')

@section('content')

  <div class="container d-flex flex-wrap justify-content-center">
      <div class="card m-3 d-flex flex-column justify-content-between card-show">
        <h4>{{$comic->title}}</h4>
        <div class="d-flex flex-column">
          <img src="{{$comic->image}}" alt="">
          <a class="btn btn-primary m-1" href="{{ route('comics.index')}}">Back</a>
          <a class="btn btn-primary m-1" href="{{ route('comics.edit', $comic)}}">Edit</a>
          <form 
              class="p-1"
              action="{{ route('comics.destroy', $comic)}}" 
              method="POST"
              onsubmit="return confirm('Sicuro di vole eliminare?')">
            @csrf

            @method('DELETE')

            <button class="btn btn-warning w-100" type="submit">Delete</button>
          </form>
        </div>
      </div>
  </div>

  
   
@endsection