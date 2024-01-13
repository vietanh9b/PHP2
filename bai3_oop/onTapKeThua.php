<?php
// Tạo 1 class ConNguoi gồm các thuộc tính: hoTen, diaChi, namSinh, email, sdt
// Tạo phương thức set giá trị cho các thuộc tính trên (sử dụng hàm __construct)
// Tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
// Tạo phương thức hiển thị thông tin: hoTen, diaChi, namSinh, email, sdt

// Tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính: diemToan, diemLy, diemHoa
// Tạo phương thức set giá trị cho các thuộc tính trên (sử dụng hàm __construct)
// Tạo phương thức tính điểm tb của HocSinh = (Toán + lý+ hóa)/3
// Tạo phương thức hiển thị thông tin HocSinh hiển thị ra các thông tin:
// hoTen, diaChi, namSinh, email, sdt, điểm TB

// Tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính: luongCB, soGioDay
// Tạo phương thức set giá trị cho các thuộc tính trên (sử dụng hàm __construct)
// Tạo phương thức tính tổng lương = luongCB *soGioDay
// Tạo phương thức hiển thị thông tin GiangVien hiển thị ra các thông tin
// hoTen, diaChi, namSinh, email, sdt, tổng lương


class ConNguoi{
    private $hoTen, $diaChi, $namSinh, $email, $sdt;
    protected function __construct($hoTen, $diaChi, $namSinh, $email, $sdt)
    {
        $this->hoTen=$hoTen;
        $this->diaChi=$diaChi;
        $this->namSinh=$namSinh;
        $this->email=$email;
        $this->sdt=$sdt;
    }
    protected function tinhTuoi(){
        return (date("Y")-$this->namSinh);
    }
    protected function hienThiThongTin(){
        $tmp_hoTen="Họ và tên: ".$this->hoTen."<br>";
        $tmp_diaChi="Địa chỉ: ".$this->diaChi."<br>";
        $tmp_namSinh="Năm sinh: ".$this->namSinh."<br>";
        $tmp_tuoi="Tuổi: ".$this->tinhTuoi()."<br>";
        $tmp_email="Email: ".$this->email."<br>";
        $tmp_sdt="SĐT: ".$this->sdt."<br>";
        return $tmp_hoTen.$tmp_diaChi.$tmp_namSinh.$tmp_tuoi.$tmp_email.$tmp_sdt;
    }
}

class HocSinh extends ConNguoi {
    public $diemToan, $diemLy, $diemHoa;

    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt,$diemToan,$diemLy,$diemHoa)
    {
        parent::__construct($hoTen, $diaChi, $namSinh, $email, $sdt);
        $this->diemToan=$diemToan;
        $this->diemLy=$diemLy;
        $this->diemHoa=$diemHoa;
    }

    public function diemTB(){
        return ($this->diemToan+$this->diemHoa+$this->diemLy)/3;
    }

    public function hienThiThongTinHocSinh(){
        return $this->hienThiThongTin()."Điểm trung bình: ".$this->diemTB();
}
}

class GiangVien extends ConNguoi {
    public $luongCB, $soGioDay;

    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt,$luongCB, $soGioDay)
    {
        parent::__construct($hoTen, $diaChi, $namSinh, $email, $sdt);
        $this->luongCB=$luongCB;
        $this->soGioDay=$soGioDay;
    }

    public function tongLuong(){
        return ($this->luongCB*$this->soGioDay);
    }

    public function hienThiThongTinGiangVien(){
        return $this->hienThiThongTin()."Tổng lương: ".$this->tongLuong();
    }
}

// object học sinh
$nam=new HocSinh("Nam","Hà Băc",2003,"anhlvph30859","0334553876",9,7,10);

echo $nam->hienThiThongTinHocSinh();
// object giảng viên

$dinh=new GiangVien("Tạ Văn ĐỊnh","Nam định",1999,"dinhtv70859","0334553876",900000,7);

echo $dinh->hienThiThongTinGiangVien();