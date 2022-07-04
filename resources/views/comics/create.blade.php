@extends('layout.main')

@section('content')
@if($errors->any())
<div class="container alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
      <div>
        {{ $error }}
      </div>   
    @endforeach
</div>
  
@endif
<div class="container card-form">
  <h3>Inserisci un fumetto</h3>
  
  <form action="{{ route('comics.store') }}" method="POST">

    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" 
      value="{{old('title')}}"
      class="form-control @error('title') is-invalid @enderror"  name="title" id="title" placeholder="Enter title" >
        @error('title')
          <p class="error-msg">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="text" 
      value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror" name="image" id="image" placeholder="Image">
        @error('image')
          <p class="error-msg">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <input type="text" 
      value="{{old('type')}}" class="form-control @error('type') is-invalid @enderror" name="type" id="type" placeholder="Type">
        @error('type')
          <p class="error-msg">{{$message}}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary my-1">Submit</button>
  </form>

</div>


   
@endsection