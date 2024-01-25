<?php
require_once "test1.php";
require_once "test2.php";
use Test1\Student as Student1;
use Test2\Student as Student2;
$user1=new Student1();
$user2=new Student2();
echo $user1-> name;
// trường hợp sử dụng 2 tên class giống nhau thì dùng namespace
//namespace dùng để định danh riêng cho class
//namespace sẽ luôn luôn được đặt ở đầu file php
//namespace giúp nhóm các class để quản lý tốt honq
//cách sử dụng
//cách 1
//$nameObj=new TenNamespace\TenClass();
//cách 2
