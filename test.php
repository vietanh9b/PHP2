<?php

// có 2 dạng truyền mảng
// - đầu tiên là truyền dạng thường 
function sum(...$numbers)
{
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }
    print_r($numbers);
    return $total;
}
$a=[1,2,3];
echo sum(...$a) . '<br>'; // 30
echo sum(10, 20, 30) . '<br>'; // 60
