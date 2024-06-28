<!-- Kế thừa lại layout dùng chung -->
@extends('layout.main')
@section('content')
<button type="button" class="btn btn-primary mb-2">
    <a class="text-decoration-none text-white" href="{{ BASE_URL.'customer/add-customer' }}">Thêm khách hàng</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th>Ảnh</th>
      <th scope="col">Tên</th>
      <th scope="col">Email</th>
      <th scope="col">Điện thoại</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
      @foreach($customers as $customer)
    <tr>
      <th scope="row">#</th>
      <td>
      <img src="{{ BASE_URL.'public/image/'.$customer->image }}" alt="" width="200px">
      </td>
      <td>{{ $customer->name }}</td>
      <td>{{ $customer->email }}</td>
      <td>{{ $customer->phone }}</td>
      <td>
          <button type="button" class="btn btn-success">
              <a class="text-decoration-none text-white" href="{{ BASE_URL.'customer/detail-customer/'.$customer->id }}">Sửa</a>
          </button>
      </td>
      
       <td>
          <button type="button" class="btn btn-danger">
              <a class="text-decoration-none text-white" href="{{ BASE_URL.'customer/delete-customer/'.$customer->id }}" onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này không?')">Xóa</a>
          </button>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection