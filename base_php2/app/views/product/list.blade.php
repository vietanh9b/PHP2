<!-- Kế thừa lại layout dùng chung -->
@extends('layout.main')
@section('content')
<button type="button" class="btn btn-primary mb-2">
    <a class="text-decoration-none text-white" href="{{ BASE_URL.'product/add' }}">Thêm sản phẩm</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
      @foreach($products as $product)
    <tr>
        <th scope="row">#</th>
        <td>{{ $product->name }}</td>
      <td>
      <img src="{{ BASE_URL.'public/image/'.$product->image }}" alt="" width="100px">
      </td>
      @foreach ($categories as $category)
        @if ($category->id==$product->id_category)
            <td>{{ $category->name }}</td>
        @endif
      @endforeach
      <td>{{ $product->price }}</td>
      <td>{{ $product->amount }}</td>
      <td>
          <button type="button" class="btn btn-success">
              <a class="text-decoration-none text-white" href="{{ BASE_URL.'product/edit/'.$product->id }}">Sửa</a>
          </button>
          <button type="button" class="btn btn-danger">
              <a class="text-decoration-none text-white" href="{{ BASE_URL.'product/delete/'.$product->id }}" onclick="return confirm('Are you sure that delete this product?')">Xóa</a>
          </button>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection