@extends('layout.main')
@section('title','Edit')
@section('content')
<form action="/update/{{$student->id}}" method="post" class="p-4">
  @csrf
    <h1>Edit Student Details</h1>
    <!-- {{$student}} -->
    <div class="form-group">
        <label for="exampleInputEmail1">Name:</label>
        <input type="text" class="form-control" name="name" value="{{$student->name}}" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email:</label>
        <input type="email" class="form-control" name="email" value="{{$student->email}}" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Contact:</label>
        <input type="text" class="form-control" name="contact" value="{{$student->contact}}" placeholder="Enter contact no.">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
