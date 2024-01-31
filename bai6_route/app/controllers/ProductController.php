<?php
namespace App\Controllers;
class ProductController{
    public function index(){
        echo "Đây là trang list product";
    }   
    public function add(){
        echo "Đây là trang add product";
    }
    public function detail($id){
        echo "$id";
    }    
}