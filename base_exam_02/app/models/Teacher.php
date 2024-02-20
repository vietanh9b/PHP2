<?php
namespace App\Models;
class Teacher extends BaseModel{
    protected $table='teacher';
    public function getListTeacher() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getTeacherName() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadRow();
    }
}
?>