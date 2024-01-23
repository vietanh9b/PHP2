<?php
// đa hình là interface ko phải là class
// interface là một khuôn mẫu để tạo ra bộ khung cho các class
// interface bắt buộc lớp sử dụng có đầy đủ phương thức của lớp interface đó
interface Move{
//    một số đặc điểm
//    không được khai báo thuộc tính
//public $name;
//    Trong interface chỉ được phép khai báo phương thức, không được phép triển khai nội dung method
public function walk();
//    phạm vi truy cập chỉ được sử dụng public mà không được dùng private và protected
}

// không được khởi tạo đối tượng từ interface
//$dongvat= new Move(); lỗi
// để sừ dụng interface thì ta cần dùng inplements để có thể sd
class Person implements Move{
//    phải sử dụng toàn bộ method từ interface
//    Không được thay đổi access range
    public function walk()
    {
    }

}
// một class có thể implements được nhiều interface
interface Move2 {
    public function walk2();
}
class Car implements Move,Move2{
    public function walk()
    {
        // TODO: Implement walk() method.
    }
    public function walk2()
    {
        // TODO: Implement walk2() method.
    }
}

// các interface có thể kế thừa lẫn nhau
interface Move3 extends Move,Move2{
    public function walk3();
}

// interface và abstract đều là bản thiết kế của các class
// nhưng mức độ mở rộng dự án của interface sẽ cao hơn vì có tính đa kế thừa

// dùng abstract class khi
// - muốn chia sẻ phương thức và thuộc tính với nhau,
// - khi muốn class trứa protected

// dùng interface khi:
// - muốn sử dụng đa kế thừa
// - định nghĩa các phương thức chung cho lớp
// không cần có mối quan hệ với nhau