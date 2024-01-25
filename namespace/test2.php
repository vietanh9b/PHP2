<?php
//tạo 1 class SinhVien(hoTen,tuoi)
//Gán giá trị cho các thuộc tính
//Khởi tạo 1 phương thức hienThiThongTin để hiển thị ra hoTen,namSinh
namespace Test2;
class Student{
    public $name='Việt Anh',$age=24;
    public function displayInfo(){
        return 'Name: '.$this->name.'<br>'.'Age: '.$this->age;
    }
}