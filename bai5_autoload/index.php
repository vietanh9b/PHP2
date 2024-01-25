<?php
require "vendor/autoload.php";

use App\Anhlv27;
use App\Models\User;
use App\ProductController;
use Bai5\HomeController;
// composer init : khởi tạo composer
// khi chỉnh sửa và muốn thêm class vào autoload thì phải ('composer dump-autoload')
$homeControler= new HomeController();

$productController=new ProductController();

$user = new User();

$anhlv27 = new Anhlv27();
getMess();
// checkmess();