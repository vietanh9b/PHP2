<!-- Kế thừa lại layout dùng chung -->
@extends('layout.main')
@section('content')
<div class="error">
  {{ isset($result) ? $result : '' }}
</div>
<button type="button" class="btn btn-primary mb-2 mt-2">
    <a class="text-decoration-none text-white" href="{{ BASE_URL.'category/add' }}">Add category</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($categories as $category)
    <tr>
      <th scope="row">#</th>
      <td>{{ $category->id }}</td>
      <td>{{ $category->name }}</td>
      <td>
          <button type="button" class="btn btn-success">
              <a class="text-decoration-none text-white" href="{{ BASE_URL.'category/edit/'.$category->id }}">Edit</a>
          </button>
          <button type="button" class="btn btn-danger">
              <a class="text-decoration-none text-white" href="{{ BASE_URL.'category/delete/'.$category->id }}" onclick="return confirm('Are you sure that delete this category?')">Delete</a>
          </button>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection