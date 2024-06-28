<!-- Kế thừa lại layout dùng chung -->
@extends('layout.main')
@section('content')
<div class="container w-50 rounded border align-items-center mt-5 p-5">
    <h3>Enter the user</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Your account name">
            <div class="error">
                {{ isset($error['name']) ? $error['name'] : '' }}
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="youremailname@gmail.com">
            <div class="error">
                {{ isset($error['email']) ? $error['email'] : '' }} 
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Your phone number">
            <div class="error">
                {{ isset($error['phone']) ? $error['phone'] : '' }} 
            </div>
        </div>
        <div class="mb-3">
            <label for="imageCustomer" class="form-label">Ảnh</label>
            <input type="file" class="form-control" id="imageCustomer" name="image">
            <div class="error">
                {{ isset($error['image']) ? $error['image'] : '' }} 
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <div class="result">
        {{ isset($result) ? $result : '' }} 
    </div>
    <br>
    <a href="{{ BASE_URL.'customer/list-customer' }}">Danh sách</a>
</div>
@endsection