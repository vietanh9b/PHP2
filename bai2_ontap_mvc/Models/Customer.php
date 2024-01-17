<?php
require_once "BaseModels.php";
class Customer extends BaseModels {
    public function getCustomer(){
        $sql='select * from user';
        return parent::dataProcess($sql);
    }

    public function getOneCustomer($id){
        $sql="select * from user where id=$id";
        return parent::dataProcess($sql,false);
    }

    public function addCustomer($name,$email,$phone){
        $sql="insert into user (name ,email,phone) value ('$name','$email','$phone');";
        return parent::dataProcess($sql);
    }

    public function updateCustomer($id_user,$name,$email,$phone){
        $sql="UPDATE user SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$id_user'";
        parent::dataProcess($sql);
    }

    public function deleteCustomer($id){
        $sql="DELETE FROM `user` WHERE `user`.`id` = $id";
        return parent::dataProcess($sql);
    }
}
