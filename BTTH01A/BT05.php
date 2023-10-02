<?php
echo"BT5: Mảng a = [ 'a' => [ 'b' => 0, 'c' => 1 ], 'b' => [  'e' => 2,  'o' => [ 'b' => 3   ]  ]  ];<br><br>";
$a = [ 'a' => [ 'b' => 0, 'c' => 1 ], 'b' => [  'e' => 2,  'o' => [ 'b' => 3   ]  ]  ];
$value1 = $a['b']['o']['b'];
echo 'Key là b có giá trị là: '.$value1 .'<br>'; // Kết quả: 3 giá trị = 3 mà có key là b từ mảng trên
$value2= $a['a']['c'];
echo 'Key là c có giá trị là: '.$value2 . '<br>'; // Kết quả: 1
echo'Thông tin phần tử có key là a: ';
$info = $a['a'];
print_r($info) . '<br>';
?>