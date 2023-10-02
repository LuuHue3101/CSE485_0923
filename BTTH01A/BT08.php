<?php
echo'BT8:Tìm chuỗi có độ dài lớn nhất, nhỏ nhất và độ dài tương ứng đó <br><br>';
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