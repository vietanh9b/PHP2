<?php
// tính kế thừa trong oop
// 1 class kế thừa class cha của nó, nó có thể sử dụng những
// thuộc tính và phương thức của class cha

// Demo tính kế thừa
class Persons {
    public $leg,$hand,$eye,$nose;

    public function legNum($leg){
        $this->leg=$leg;
    }

    public function handNum($hand){
        $this->hand=$hand;
    }

    public function eat(){
        echo "Eat by mouth";
    }
}

class Adults extends Persons {
    public function leg(){
        echo "Walk by ".$this->leg." legs";
}
}

class Childrents extends Persons {
    public function crawling(){
        echo "<br>Childrents Crawling by ".$this->hand." hands and ".$this->leg.' legs';
    }
}

// adults object
$Khoa=new Adults();
$Khoa->eat();
$Khoa->legNum(2);
$Khoa->leg();

// tạo 1 class trẻ con kế thừa từ class con người
// trong class trẻ con khai báo 1 method là bò
// hiển thị ra trẻ con bò bằng 2 tay 2 chấn
// child object
$Nhi=new Childrents();
$Nhi->handNum(2);
$Nhi->legNum(2);
$Nhi->crawling();

// Phạm vi truy cập

//public
//protected
//private
echo '<br>';
class Truycap{
    public $public="Có thể truy cập ở bất cứ đâu";
    private $private="Chỉ có thể sử dụng được bên trong class";
    protected $protected="Có thể truy cập dữ liệu ở trong class và các class kế thừa";
}
$phamViTruyCap=new Truycap();
echo $phamViTruyCap->public;