<?php
//PHP have 7 data types:
//

//Boolean
$male=true;
//Object
class foo
{
    function do_foo()
    {
        echo "Doing foo.";
    }
}

$bar = new foo;
//$bar->do_foo();
//NULL
$myNull=null;

//Integer
    $born=2003;
//Float
    $weight=55.6;
//String
    $name='vietanh';
    $phone='0334553865';
//Array
    //mảng tuần tự là mảng mà các vị trí được đánh từ 0->n-1
    //check array
//    var_dump($favourite);
//    echo "<pre>";
//    print_r($favourite);
//    echo "</pre>";
//  print my ex array
    $myEx=['Trang','Thao','Lan Anh','Phuong Anh','Hoa'];
    for($i=0;$i<count($myEx);$i++){
        echo $myEx[$i];
        echo '<br>';
    }
//    count even number in array
    $evenNumber=[1,2,3,4,5,6,8,9,22,11];
    $sum=0;
    foreach ($evenNumber as $key =>$value){
        if($value%2==0){
           $sum+=$value;
        }
    }
    echo 'Tổng các số chẵn trong mảng ['.implode(", ",$evenNumber).'] là: '.$sum;
//    mảng liên hợp là mảng các phần tử được chỉ định bởi các khóa key duy nhất thay vì
// các số nguyên mặc định
    //First declare array in php
    $favourite=[
        'sport'=>[
            'football','badminton'
        ],
        'movie'=>[
            'attackOntitan','demonSlayer'
        ]
    ];
    //Final declare array in php
    $favourite_is_mine=array(
        'sport'=>[
            'football','badminton'
        ],
        'movie'=>[
            'attackOntitan','demonSlayer'
        ]
    );
//    bài tập cho mảng sau. Hiển thị màu sắc ra 1 bảng
    $bg_color=[
        'red' => 'Màu đỏ',
        'blue' => 'Màu xanh dương',
        'green' => 'Màu xanh lá',
        'black' => 'Màu đen'
    ];

    ?>

    <table border="1" cellspacing="0">
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>
        <?php
            foreach ($bg_color as $key =>$value){
                echo "
                <tr>
                    <td>
                        <div style='height: 20px; width: 50px; background: $key;margin: 4px'></div>
                    </td>
                    <td>$value</td>
                </tr>
                ";
            }
        ?>
    </table>