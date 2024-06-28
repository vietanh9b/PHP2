<!--//Class Student-->
<!--//-->
<!--//Thuộc tính: id, name, age, grade-->
<!--//Phương thức:-->
<!--//Constructor để khởi tạo một học sinh với các thông tin id, name, age, grade.-->
<!--//Getter và setter cho tất cả các thuộc tính.-->
<!---->
<!--//Class StudentManager-->
<!--//-->
<!--//Thuộc tính: students (một mảng chứa các đối tượng Student)-->
<!--//Phương thức:-->
<!--//addStudent($student): Thêm một đối tượng Student vào mảng students.-->
<!--//removeStudent($student): Xóa một đối tượng Student khỏi mảng students.-->
<!--//getStudents(): Trả về danh sách các đối tượng Student.-->
<!--//getStudentById($id): Trả về đối tượng Student dựa trên id được cung cấp.-->
<!--//getStudentsByGrade($grade): Trả về danh sách các đối tượng Student theo grade.-->

<?php
class Student {
    private $id, $name, $age, $grade;
    protected static $instant = [];

    public function setStudent($id, $name, $age, $grade){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
        array_push(self::$instant, $this);
//    echo '<br>';
//    print_r($this);
//    echo '<br>';
    }

    public function getStudentId(){
        return $this->id;
    }

    public function getStudentName(){
        return $this->name;
    }

    public function getStudentAge(){
        return $this->age;
    }

    public function getStudentGrade(){
        return $this->grade;
    }
}

class StudentManager {
    private $students = [];

    public function addStudent($student){
        array_push($this->students, $student);
    }

    public function removeStudent($student){
        $key = array_search($student, $this->students);
        if ($key !== false) {
            unset($this->students[$key]);
        }
    }

    public function getStudents(){
        return $this->students;
    }

    public function getStudentById($id){
        foreach ($this->students as $student){
            if ($student->getStudentId() == $id) {
                return $student;
            }
        }
        return null;
    }

    public function getStudentsByGrade($grade){
        $result = [];
        foreach ($this->students as $student){
            if ($student->getStudentGrade() == $grade) {
                $result[] = $student;
            }
        }
        return $result;
    }
}

$student1 = new Student();
$student2 = new Student();
$student1->setStudent(1, 'Viet Anh', 20, 9.0);
$student2->setStudent(2, 'Lan Anh', 21, 8.0);

$manager = new StudentManager();
$manager->addStudent($student1);
$manager->addStudent($student2);

// var_dump($manager->getStudents());
// var_dump($manager->getStudentById(2));
// var_dump($manager->getStudentsByGrade(9.0));


$test=$_SERVER['HTTP_USER_AGENT'];
// echo $test;
$substract=fn($a,$b)=>$a-$b;
echo $substract(1,2);