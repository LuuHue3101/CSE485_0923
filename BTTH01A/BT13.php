<?php
    echo'BT13:<br><br>';
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