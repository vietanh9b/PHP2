<?php
namespace App\Models;
class Product extends BaseModel{
        protected $table="product";
        public function getProduct(){
            $sql="SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function getProductName(){
            $sql="SELECT name FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function getOneProduct($id){
            $sql="select * from $this->table where id=$id";
            $this->setQuery($sql);
            return parent::loadRow();
        }

        public function add($name,$id_category,$price,$amount,$image){
            $sql="insert into $this->table (name ,id_category,price,amount,image) value ('$name','$id_category','$price','$amount','$image');";
            $this->setQuery($sql);
            parent::execute();
        }

        public function update($id,$name,$id_category,$price,$amount,$image){
            $sql="UPDATE $this->table SET name = '$name', id_category = '$id_category', price = '$price',amount='$amount',image='$image' WHERE id = '$id'";
            $this->setQuery($sql);
            parent::execute();
        }

        public function delete($id){
            $sql="DELETE FROM $this->table WHERE id = $id";
            $this->setQuery($sql);
            parent::execute();
        }
        public function checkNumberProduct($id_category){
            $sql="SELECT COUNT(*) AS product_count
                    FROM product
                    WHERE id_category = '$id_category';";
            $this->setQuery($sql);
            return parent::loadRow();
        }
}