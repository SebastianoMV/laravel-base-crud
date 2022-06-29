@extends('layout.main')

@section('content')

<form>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control" id="image" placeholder="Image">
  </div>
  <div class="form-group">
    <label for="type">Image</label>
    <input type="text" class="form-control" id="type" placeholder="Type">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
@endsection