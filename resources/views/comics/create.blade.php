@extends('layout.main')

@section('content')

<form action="{{ route('comics.store') }}" method="POST">

  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control" name="image" id="image" placeholder="Image">
  </div>
  <div class="form-group">
    <label for="type">Type</label>
    <input type="text" class="form-control" name="type" id="type" placeholder="Type">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
@endsection