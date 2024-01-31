<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.style')
    <title>Document</title>
</head>
<body>
<div class="container">
    <header>
        <div class="header-main">
            <ul class="menu">
                <li><a href="">Quản lý danh mục</a></li>
                <li><a href="">Quản lý sản phẩm</a></li>
            </ul>
        </div>
    </header>
    <section class="content">
        {{-- 
            là một lệnh được sử dụng trong các hệ thống blade template engine trong PHP 
            sử dụng để đặt nội dung của trang vào một vị trí cụ thể trong layout chung.
        --}}
       @yield('content')
    </section>
    <footer>
        <span>FPT POLYTECNIC</span>
    </footer>
</div>
</body>
</html>