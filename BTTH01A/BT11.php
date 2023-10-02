<?php
    echo'BT11:Cho mảng  $array = array(1, 2, 3, 4, 5); Thực hiện xóa phần tử thứ 3 trong mảng trên, sau khi xóa hãy đảm bảo key của mảng là tuần tự <br><br>';
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