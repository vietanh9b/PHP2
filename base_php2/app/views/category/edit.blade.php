<!-- Kế thừa lại layout dùng chung -->
@extends('layout.main')
@section('content')
<div class="container w-50 rounded border align-items-center mt-5 p-5">
    <h3>Add category</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Category name" value="{{$category->name}}">
            <div class="error">
                {{ isset($errors['name']) ? $errors['name'] : '' }}
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <div class="result">
        {{ isset($result) ? $result : '' }}
    </div>
    <br>
    <a href="{{ BASE_URL.'category/list' }}">List category</a>
</div>
@endsection