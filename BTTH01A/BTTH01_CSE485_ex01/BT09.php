<?php
    echo'BT9:Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự thường. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra <br><br>';
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