<?php
namespace App\Models;
class Category extends BaseModel{
        protected $table="categories";
        public function getCategory(){
            $sql="SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function getCategoryName(){
            $sql="SELECT name FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function getOneCategory($id){
            $sql="select name from $this->table where id=$id";
            $this->setQuery($sql);
            return parent::loadRow();
        }

        public function add($name){
            $sql="insert into $this->table (name) value ('$name');";
            $this->setQuery($sql);
            parent::execute();
        }

        public function update($id,$name){
            $sql="UPDATE $this->table SET name = '$name' WHERE id = '$id'";
            $this->setQuery($sql);
            parent::execute();
        }

        public function delete($id){
            $sql="DELETE FROM $this->table WHERE id = $id";
            $this->setQuery($sql);
            parent::execute();
        }
}