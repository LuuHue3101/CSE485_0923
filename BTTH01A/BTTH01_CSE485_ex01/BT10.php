<?php
echo'BT10:Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự hoa. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra <br><br>';
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