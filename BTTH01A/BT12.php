<?php
    echo'BT12:<br><br>';
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