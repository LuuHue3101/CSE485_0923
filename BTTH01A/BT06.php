<?php
    echo'BT6: Cho mảng <br>array(<br>
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