<?php
class Teacher {
    public $code, $name, $start_year, $salaryAnHour, $hours;
    public static $teachers = []; // Mảng chứa các đối tượng Teacher

    public function __construct($code, $name, $start_year, $salaryAnHour, $hours) {
        $this->code = $code;
        $this->name = $name;
        $this->start_year = $start_year;
        $this->salaryAnHour = $salaryAnHour;
        $this->hours = $hours;

        // Thêm đối tượng Teacher vào mảng tự động khi nó được tạo ra
        self::$teachers[] = $this;
    }

    public function totalSalary() {
        return $this->hours * $this->salaryAnHour;
    }

    public function teacherInfo() {
        return [
            $this->code, $this->name, $this->start_year,
            $this->salaryAnHour, $this->hours, $this->totalSalary()
        ];
    }
}

$taVanDinh = new Teacher('PH32890', 'Tạ Văn Định', '2022', 35000, 8);

$nguyenVanA = new Teacher('PH12345', 'Nguyễn Văn A', '2021', 30000, 10);

// In thông tin của tất cả các giáo viên
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <table border="1" border-spacing='0'>
        <tr>
            <th>Mã giảng viên</th>
            <th>Tên giảng viên</th>
            <th>Năm vào trường</th>
            <th>Tiền lương 1 giờ</th>
            <th>Số giờ làm việc</th>
            <th>Tổng lương</th>
        </tr>

            <?php foreach (Teacher::$teachers as $teacher):?>
        <tr>
                <?php foreach ($teacher->teacherInfo() as $value): ?>
                    <td><?= $value?></td>
                <?php endforeach;?>
        </tr>
                <?php endforeach;?>
    </table>
    </body>
    </html>

