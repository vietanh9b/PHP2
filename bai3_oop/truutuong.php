<?php
// trừu tượng là gì?
// cái gì mà chúng ta không cụ thể hóa được thì trừu tượng lên
abstract class Crush{
//    Một số đặc điểm của abstract class
//    Một class được gọi là class trừu tượng khi nó chứa phương thức trừu tượng
    abstract public function loveMe();
//    Phương thức trừu tượng chỉ được phép khai báo ở class trừu tượng và không
// triển khai nội dung
//    Nếu không phải là phương thức trừu tượng thì vẫn triển khai như bình thường
//    Chỉ có phương thức trừu tượng chứ không có thuộc tính trừu tượng
    function walk(){
        echo "di bang 2 chan";
    }
//    phạm vi truy cập trong lớp trừu tượng chỉ được khai báo là public và protected
//    abstract protected function chay();
}
// Không thể khởi tạo đối tượng từ class abstract
//$crush1=new Crush(); lỗi


// các lớp kế thừa lại lớp trừu tượng phải định nghĩa lại tất cả phương thức trừu tượng
// trong class trừu tượng đó
class Ex extends Crush{
//    Phương thức trừu tượng không thể sử dụng với parent::
    public function loveMe()
    {
        echo 'She was love me';
    }
}
$ex1= new Ex();
$ex1->loveMe();