<?php
function listCustomer(){
    $customer=getCustomer();
    include_once "Views/Customer/ListCostomer.php";
}
function addCustomerController(){
    $result='';
    $error=1;
    if(isset($_POST['submit'])){
//        print_r($_POST);
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        if(empty($name)){
            $error_name='Bạn phải nhập tên';
            $error=0;
        }
        if(empty($email)){
            $error_email='Bạn phải nhập email';
            $error=0;
        }
        if(empty($name)){
            $error_phone='Bạn phải nhập số điện thoại';
            $error=0;
        }
        if($error){
            $result='Nhập thành công';
            addCustomer($name,$email,$phone);
        }
    }
        require_once "Views/Customer/AddCostomer.php";
}

function updateCustomerController(){
    $id=$_GET['id'];
    $error=1;
    if(isset($_POST['submit'])){
//        print_r($_POST);
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
//        if(empty($name)){
//            $error_name='Bạn phải nhập tên';
//            $error=0;
//        }
//        if(empty($email)){
//            $error_email='Bạn phải nhập email';
//            $error=0;
//        }
//        if(empty($name)){
//            $error_phone='Bạn phải nhập số điện thoại';
//            $error=0;
//        }
//        if($error){
//            $result='Nhập thành công';
            updateCustomer($id,$name,$email,$phone);

    }
        $getOneCustomer=getOneCustomer($id);
        require_once "Views/Customer/UpdateCostomer.php";

    }

function deleteCustomerController(){
        $id=$_GET['id'];
        deleteCustomer($id);
        $customer=getCustomer();
        require_once "Views/Customer/ListCostomer.php";
}