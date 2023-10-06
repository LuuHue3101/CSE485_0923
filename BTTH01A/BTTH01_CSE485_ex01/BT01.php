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
?>