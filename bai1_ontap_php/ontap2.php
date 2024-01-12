<?php
//kiểm tra số 5 và số 6 là số chắn hay số lẻ
//in thông báo ra màn hình
//hàm là 1 đoạn mã thực hiện 1 công việc cụ thể có tính tái sd cao
    function checkNum($number){
        if($number%2==0){
            $result=$number.' là số chẵn';
        }else{
            $result=$number.' là số lẻ';
        }
        return $result;
    }
//    echo checkNum(5);
//    echo '<br>';
//    echo checkNum(6);
//    echo '<br>';

//    tính diện tích hình thang hiển thị ra màn hình
function trapezoidAcreage($top,$bottom,$height){
    $result= (($top+$bottom)*$height)/2;
    return "Diện tích hình thang có đáy $top, $bottom và chiều cao $height là: $result";
}

//echo trapezoidAcreage(5,10,6);

// bài 1: sử dụng hàm trả về để tính phương trình bậc 2
// phương trình bậc 2 có dạng : $a^2x+$bx+$c=0
function quadraticEquation2($a,$b,$c){
    if($a==0){
        if($b!=0){
            $value=(-$c/$b);
        }
        else{
            if($c==0){
                $value='Phương trình vô số nghiệm';
            }else{
                $value='Phương trình vô nghiệm';
            }
        }
    }else{
        $delta=$b*$b-4*$a*$c;
        if($delta>0){
            $value=(-$b+sqrt($delta))/(2*$a);
            $value2=(-$b+sqrt($delta))/(2*$a);
        }elseif ($delta==0){
            $value=(-$b)/(2*$a);
        }else{
            $value='Phương trình vô nghiệm';
        }
    }
    if(isset($value2)){
        return [$value,$value2];
    }else{
        return $value;
    }
}
echo quadraticEquation2(0,1,3);
echo '<br>';
// bài 2: sử dụng hàm không trả về để kiểm tra giới tính và tuổi đi nghĩa vụ (18-27)
//truyền vào tên tuổi giới tính

function user($name,$age,$gender){
    $result = ($gender == 0 && $age >= 18 && $age <= 27) ? "$name đã đủ tuổi đi nghĩa vụ" :
        (($gender == 0 && ($age < 18 || $age > 27)) ? "$name không phù hợp độ tuổi đi nghĩa vụ" : "$name là con gái không phải đi nghĩa vụ");
    return $result;
}
echo user('viet anh',11,1);