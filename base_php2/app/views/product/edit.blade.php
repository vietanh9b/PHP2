<!-- Kế thừa lại layout dùng chung -->
@extends('layout.main')
@section('content')
<div class="container w-50 rounded border align-items-center mt-5 p-5">
    <h3>Add product</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Product name" value="{{$product->name}}">
            <div class="error">
                {{ isset($errors['name']) ? $errors['name'] : '' }}
            </div>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="1000000" value="{{$product->price}}">
            <div class="error">
                {{ isset($errors['price']) ? $errors['price'] : '' }} 
            </div>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="text" class="form-control" id="amount" name="amount" placeholder="20" value="{{$product->amount}}">
            <div class="error">
                {{ isset($errors['amount']) ? $errors['amount'] : '' }} 
            </div>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="id_category" id="" class="form-control form-select">
                @foreach ($categories as $category)
                    <option @if ($category->id==$product->id_category)
                        selected
                    @endif value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="imageCustomer" class="form-label">Ảnh</label>
            <input type="file" class="form-control" id="imageCustomer" name="image">
            <img src="{{BASE_URL.'public/image/'.$product->image}}" alt="" width="100px">
            <div class="error">
                {{ isset($errors['image']) ? $errors['image'] : '' }} 
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <div class="result">
        {{ isset($result) ? $result : '' }} 
    </div>
    <br>
    <a href="{{ BASE_URL.'product/list' }}">List product</a>
</div>
@endsection