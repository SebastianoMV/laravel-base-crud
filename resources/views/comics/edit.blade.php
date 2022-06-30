@extends('layout.main')

@section('content')


<h2>{{$comic->name}}</h2>

<form action="{{ route('comics.update', $comic) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" 
    value="{{ $comic->title }}" class="form-control" name="title" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" {{ $comic->image }} class="form-control" name="image" id="image" placeholder="Image">
  </div>
  <div class="form-group">
    <label for="type">Type</label>
    <input type="text" {{ $comic->type }} class="form-control" name="type" id="type" placeholder="Type">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
@endsection