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
        <div class="title-card">
          {{$comic->title}}
        </div>
        {{$comic->slug}}
        <div class=" flex-column justify-content-center">
          <img src="{{$comic->image}}" alt="">
          <a class="btn btn-primary m-1" href="{{ route('comics.show', $comic)}}">Show</a>
          <a class="btn btn-primary m-1" href="{{ route('comics.edit', $comic)}}">Edit</a>
          <form 
                class="d-inline"
                action="{{ route('comics.destroy', $comic)}}" 
                method="POST"
                onsubmit="return confirm('Sicuro di vole eliminare?')">
          @csrf

          @method('DELETE')

          <button class="btn btn-warning" type="submit">DELETE</button>
          </form>
        </div>
      </div>
      
      

      @endforeach
  </div>
   
@endsection