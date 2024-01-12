<?php
require_once "db.php";
function getCustomer(){
    $sql='select * from user';
    return dataProcess($sql);
}

function getOneCustomer($id){
    $sql="select * from user where id=$id";
    return dataProcess($sql,false);
}

function addCustomer($name,$email,$phone){
    $sql="insert into user (name ,email,phone) value ('$name','$email','$phone');";
    return dataProcess($sql);
}

function updateCustomer($id_user,$name,$email,$phone){
    $sql="UPDATE user SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$id_user'";
    dataProcess($sql);
}

function deleteCustomer($id){
    $sql="DELETE FROM `user` WHERE `user`.`id` = $id";
    return dataProcess($sql);
}
