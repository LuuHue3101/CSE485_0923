<?php
    echo'BT14:Gộp 2 mảng sau dựa theo key của từng mảng <br><br>';
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