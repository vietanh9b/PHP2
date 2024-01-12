<?php
// định nghĩa 1 class sinh viên
class Student{
// khai báo các thuộc tính của đối tượng (biến trong class)
    public $name;
    public $born;
    public $studentCode;
// getter, setter
    public function __construct($name,$born,$studentCode)
    {
        $this->name=$name;
        $this->born=$born;
        $this->studentCode=$studentCode;
// hàm khởi tạo (magic function)
//    php chạy hàm construct đầu tiên nếu nó tồn tại
//        Thường được sử dụng để khởi tạo những giá trị ban đầu cho các thuộc tính của đối tượng

    }

//    public function setStudentName($name){
//        $this->name=$name;
//    }
//    public function setStudentBorn($born){
//        $this->born=$born;
//    }
//    public function setStudentCode($studentCode){
//        $this->studentCode=$studentCode;
//    }
    public function getStudentName(){
        return $this->name;
    }
    public function getStudentBorn(){
        return $this->born;
    }
    public function getStudentCode(){
        return $this->studentCode;
    }
    public function getStudentAge(){
        return (date("Y")-$this->getStudentBorn());
    }
    public function getStudentInfo(){
        $tmp_name= "Tên: ".$this->getStudentName()."<br>";
        $tmp_born= "Sinh năm: ".$this->getStudentBorn()."<br>";
        $tmp_code= "Mã sinh viên: ".$this->getStudentCode()."<br>";
        $tmp_age= "Tuổi: ".$this->getStudentAge();
        return $tmp_name.$tmp_born.$tmp_code.$tmp_age;
    }
}
// Khởi tạo 1 đối tượng thông qua class
$Student1= new Student('Việt Anh',2003,'PH30859');
$Student2= new Student('Việt Anh',2004,'PH30859');

// get
echo $Student1->getStudentInfo();