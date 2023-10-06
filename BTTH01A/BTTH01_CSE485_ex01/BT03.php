<?php
echo'BT3:Hiển thị nội dung ra bảng<br><br>';
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