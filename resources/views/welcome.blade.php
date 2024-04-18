@extends('layout.main')
@section('title', 'Home')
@section('content')
<form action="/save" method="post" class="p-4">
  @csrf
    <h1>Student Details</h1>
    <div class="form-group">
        <label for="exampleInputEmail1">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Contact:</label>
        <input type="text" class="form-control" name="contact" placeholder="Enter contact no.">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<div class="card">
  <div class="card-body">
    <h1>Students</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=0; ?>
        @foreach($students as $data)
        <tr>
          <td>{{++$i}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->contact}}</td>
          <td>
            <a href="/edit/{{$data->id}}" class="btn btn-primary">Edit</a>
            <a href="/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection