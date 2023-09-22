<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập Thực Hành 1A</title>
</head>
<body>
    
<?php
echo'BT1:Viết hàm tổng – tích – hiệu - thương của các phần tử trong mảng số nguyên sử dụng hàm trong PHP<br><br>';
function tinhToanMang($arrs) {
    // Tính tổng các phần tử
    $tong = array_sum($arrs);

    // Tính tích các phần tử
    $tich = array_product($arrs);

    // Tính hiệu các phần tử
    $hieu = $arrs[0] - array_sum(array_slice($arrs, 1));

    // Tính thương các phần tử
    $thuong = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        if ($arrs[$i] != 0) {
            $thuong /= $arrs[$i];
        } else {
            echo "Lỗi: Chia cho 0.";
            return;
        }
    }

    // Hiển thị kết quả
    echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $tong . "<br>";
    echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $tich . "<br>";
    echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $hieu . "<br>";
    echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $thuong . "<br>";
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
tinhToanMang($arrs);

//BT2
echo'<br>BT2:Hiển thị chuỗi: <br> <br>';
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$nguoiYeuThich = ['Anh', 'Sơn', 'Thắng', 'tôi'];

$chuoi = "";
for ($i = 0; $i < count($arrs); $i++) {
    $chuoi .= "Màu " . $arrs[$i] . " là màu yêu thích của " . $nguoiYeuThich[$i];
    if ($i < count($arrs) - 1) {
        $chuoi .= ", ";
    } else {
        $chuoi .= ".";
    }
}

echo $chuoi;
?>
<!-- Bt3 -->

<?php
echo'<br> <br>BT3:Hiển thị nội dung ra bảng<br><br>';
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<table border='1'>
    <tr>
        <th>Tên khóa học</th>
    </tr>
    <?php foreach ($arrs as $course) : ?>
        <tr>
            <td><?php echo $course; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- BT4 -->
<?php
echo'<br><br>BT4:Hiển thị các thông tin đầu ra<br><br>';
$arrs = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

foreach ($arrs as $country => $capital) {
    echo "Thủ đô của $country là $capital<br>";
}

?>

<!-- BT5 -->
<?php
echo"<br><br>BT5: Mảng a = [ 'a' => [ 'b' => 0, 'c' => 1 ], 'b' => [  'e' => 2,  'o' => [ 'b' => 3   ]  ]  ];<br><br>";
$a = [ 'a' => [ 'b' => 0, 'c' => 1 ], 'b' => [  'e' => 2,  'o' => [ 'b' => 3   ]  ]  ];
$value1 = $a['b']['o']['b'];
echo 'Key là b có giá trị là: '.$value1 .'<br>'; // Kết quả: 3 giá trị = 3 mà có key là b từ mảng trên
$value2= $a['a']['c'];
echo 'Key là c có giá trị là: '.$value2 . '<br>'; // Kết quả: 1
echo'Thông tin phần tử có key là a: ';
$info = $a['a'];
print_r($info) . '<br>';
?>

<!-- BT6 -->
<?php
    echo'<br><br>BT6: Cho mảng <br>array(<br>
        "field1" => "first",<br>
        "field2" => "second",<br>
        "field3" => "third"<br>
    );
    và mảng<br>
    array(<br>
        "field1value" => "dinosaur",<br>
        "field2value" => "pig",<br>
        "field3value" => "platypus"<br>
    );
    <br><br>';
    $keys = array(
        "field1" => "first",
        "field2" => "second",
        "field3" => "third"
    );
    
    $values = array(
        "field1value" => "dinosaur",
        "field2value" => "pig",
        "field3value" => "platypus"
    );
    
    $keysAndValues = array_combine(array_values($keys), array_values($values));
    echo'Mảng thứ 3 từ 2 mảng trên là <br>$keysAndValues = array( <br>';
    foreach ($keysAndValues as $keys => $values) {
        echo "[$keys] => $values<br>";
}
    echo');';

    
?>

<!-- BT7 -->
<?php
    echo'<br><br>BT7:Tìm và hiển thị tất cả các số từ 100 đến 200 và chia hết cho 5 trong mảng $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100,  -125, 0]; <br><br>';
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
    foreach ($array as $number) {
        if ($number >= 100 && $number <= 200 && $number % 5 === 0) {
            echo $number . "<br>";
        }
    }
    
?>

<!-- BT8 -->
<?php
echo'<br><br>BT8:Tìm chuỗi có độ dài lớn nhất, nhỏ nhất và độ dài tương ứng đó <br><br>';
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLength = strlen($array[0]);
$minLength = strlen($array[0]);
$maxString = $array[0];
$minString = $array[0];

foreach ($array as $string) {
    $length = strlen($string);

    if ($length > $maxLength) {
        $maxLength = $length;
        $maxString = $string;
    }

    if ($length < $minLength) {
        $minLength = $length;
        $minString = $string;
    }
}

echo "Chuỗi lớn nhất là $maxString, độ dài = $maxLength<br>";
echo "Chuỗi nhỏ nhất là $minString, độ dài = $minLength<br>";

?>

<!-- BT9 -->
<?php
    echo'<br><br>BT9:Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự thường. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra <br><br>';
    function chuyenChuThuong(&$arr) {
        foreach ($arr as &$value) {
            if (is_string($value)) {
                $value = strtolower($value);
            }
        }
    }
    echo"mảng trước khi chuyển:arr = ['1', 'B', 'C', 'E']<br>";
    $arr1 = ['1', 'B', 'C', 'E'];
    chuyenChuThuong($arr1);
    echo"mảng sau khi chuyển:";
    print_r($arr1);
    echo'<br><br>';

    echo"mảng trước khi chuyển:arr = ['a', 0, null, false]<br>";
    $arr2 = ['a', 0, null, false];
    chuyenChuThuong($arr2);
    echo"mảng sau khi chuyển:";
    print_r($arr2);

?>

<!-- BT10 -->
<?php
echo'<br><br>BT10:Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự hoa. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra <br><br>';
    function chuyenChuHoa(&$arr) {
        foreach ($arr as &$value) {
            if (is_string($value)) {
                $value = strtoupper($value);
            }
        }
    }
    echo"mảng trước khi chuyển:arr = ['1', 'b', 'c', 'd'] <br>";
    $arr1 = ['1', 'b', 'c', 'd'];
    chuyenChuHoa($arr1);
    echo"mảng sau khi chuyển:";
    print_r($arr1);
    echo'<br><br>';
    
    echo"mảng trước khi chuyển:arr = ['a', 0, null, false] <br>";
    $arr2 = ['a', 0, null, false];
    chuyenChuHoa($arr1);
    echo"mảng sau khi chuyển:";
    print_r($arr1);
?>

<!-- BT11 -->
<?php
    echo'<br><br>BT11:Cho mảng  $array = array(1, 2, 3, 4, 5); Thực hiện xóa phần tử thứ 3 trong mảng trên, sau khi xóa hãy đảm bảo key của mảng là tuần tự <br><br>';
    $array = array(1, 2, 3, 4, 5);

    // Xóa phần tử thứ 3 (vị trí 2) trong mảng
    array_splice($array, 2, 1);

    // Đảm bảo key của mảng là tuần tự
    $array = array_values($array);

    // In mảng sau khi xóa 
    foreach ($array as $key => $value) {
        echo "[$key] => $value<br>";
}

    
?>

<!-- BT12 -->
<?php
    echo'<br><br>BT12:<br><br>';
    $numbers = [ 
        'key1' => 12,    
        'key2' => 30,    
        'key3' => 4,    
        'key4' => -123,    
        'key5' => 1234,    
        'key6' => -12565,    
      ]; 
      $firstElement = reset($numbers);
      echo "Phần tử đầu tiên: $firstElement<br>";
    
      $lastElement = end($numbers); 
      echo "Phần tử cuối cùng: $lastElement<br>";

      // Tìm số lớn nhất
      $maxValue = max($numbers);
      
      // Tìm số nhỏ nhất
      $minValue = min($numbers);
      
      // Tính tổng các giá trị
      $sum = array_sum($numbers);
      
      echo "Số lớn nhất: $maxValue<br>";
      echo "Số nhỏ nhất: $minValue<br>";
      echo "Tổng các giá trị: $sum<br>";

      //chiều tăng dần
      asort($numbers);
      echo'mảng được sắp xếp theo chiều tăng dần:';
      foreach ($numbers as $value) {
      echo $value . ", ";
      }

      //chiều giảm dần
      arsort($numbers);
      echo'<br>mảng được sắp xếp theo chiều giảm dần:';
      foreach ($numbers as $value) {
      echo $value . ", ";
      }

      //chiều tăng dần theo key
      ksort($numbers);
      echo'<br>mảng được sắp xếp theo chiều tăng dần theo key:';
      foreach ($numbers as $value) {
        echo $value . ", ";
        }

      //chiều giảm dần theo key
      krsort($numbers);
      echo'<br>mảng được sắp xếp theo chiều giảm dần theo key:';
      foreach ($numbers as $value) {
      echo $value . ", ";
      }
?>

<!-- BT13 -->
<?php
    echo'<br><br>BT13:<br><br>';
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    // Tính tổng các giá trị trong mảng
    $total = array_sum($numbers);

    // Đếm số lượng phần tử trong mảng
    $count = count($numbers);

    // Tính giá trị trung bình
    $average = $total / $count;

    echo "Giá trị trung bình của mảng: $average <br>";

    //các số có giá trị lơns hơn giá trị trung bình
    echo "Các số lớn hơn giá trị trung bình: " ;
    foreach ($numbers as $number1) {
        if ($number1 > $average) {
            echo "$number1 ";
        }
    }

    //các số nhỏ hơn hoặc bằng giá trị trung bình
    echo "<br>Các số nhỏ hơn hoặc bằng giá trị trung bình: " ;
    foreach ($numbers as $number2) {
        if ($number2 <= $average) {
            echo "$number2 ";
        }
    }
?>
<!-- BT14 -->
<?php
    echo'<br><br>BT14:Gộp 2 mảng sau dựa theo key của từng mảng <br><br>';
    $array1 = [ 
        [77, 87], 
        [23, 45] 
      ]; 
      $array2 = [ 
        'giá trị 1', 'giá trị 2' 
      ]; 
      
      // Khởi tạo mảng kết quả
      $result = [];
      
      // Duyệt qua các phần tử của mảng thứ hai
      for ($i = 0; $i < count($array2); $i++) {
          // Tạo một mảng con với giá trị từ mảng thứ hai
          $subArray = [$array2[$i]];
          
          // Duyệt qua các phần tử của mảng thứ nhất và thêm vào mảng con
          for ($j = 0; $j < count($array1); $j++) {
              $subArray[] = $array1[$j][$i];
          }
          
          // Thêm mảng con vào mảng kết quả
          $result[] = $subArray;
      }
      
      // Hiển thị mảng kết quả
      foreach ($result as $subArray) {
          echo "[";
          for ($k = 0; $k < count($subArray); $k++) {
              echo " ".$subArray[$k]." ";
              if ($k < count($subArray) - 1) {
                  echo ",";
              }
          }
          echo "]<br>";
      }
      
?>
</body>
</html>

