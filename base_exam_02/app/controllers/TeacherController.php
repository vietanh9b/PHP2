<?php
namespace App\Controllers;
use App\Models\Teacher;
class TeacherController extends BaseController{
    protected $teacher;
    public function __construct()
    {
        $this->teacher=new Teacher();
    }
    public function ListTeachers($name=true) {
        if($name){
            $teachers=$this->teacher->getListTeacher();
            if ($teachers !== false) {
                $this->render("teacher.ListTeacher", compact('teachers'));
            } else {
                echo "Error fetching customer data";
            }
        }else{
            $teachers=$this->teacher->getTeacherName();
            return $teachers;
        }
    }
}