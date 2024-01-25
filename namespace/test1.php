<?php
//tạo 1 class SinhVien(hoTen,namSinh)
//Gán giá trị cho các thuộc tính
//Khởi tạo 1 phương thức hienThiThongTin để hiển thị ra hoTen,namSinh
namespace Test1;
class Student{
    public $name='Việt Anh',$born=2000;
    public function displayInfo(){
        return 'Name: '.$this->name.'<br>'.'Born: '.$this->born;
    }
}