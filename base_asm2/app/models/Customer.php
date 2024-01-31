<?php
namespace App\Models;
use App\Models\BaseModel;
class Customer extends BaseModel{
    public function getCustomer(){
        $sql='SELECT * FROM `user`';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getCustomerName(){
        $sql='SELECT name FROM `user`';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
        // public function getOneCustomer($id){
        //     $sql="select * from user where id=$id";
        //     return parent::dataProcess($sql,false);
        // }

        public function addCustomer($name,$email,$phone){
            $sql="insert into user (name ,email,phone) value ('$name','$email','$phone');";
            $this->setQuery($sql);
            return parent::execute();
        }

        // public function updateCustomer($id_user,$name,$email,$phone){
        //     $sql="UPDATE user SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$id_user'";
        //     parent::dataProcess($sql);
        // }

        // public function deleteCustomer($id){
        //     $sql="DELETE FROM `user` WHERE `user`.`id` = $id";
        //     return parent::dataProcess($sql);
        // }
}