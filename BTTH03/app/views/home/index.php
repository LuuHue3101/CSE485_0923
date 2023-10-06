<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Danh Sách Bệnh Nhân</h3>
        <a href="<?=DOMAIN.'app/views/patient/add.php'?>" class='btn btn-success'>Thêm mới bệnh nhân</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã bệnh nhân</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Ngày Khám</th>
      <th scope="col">Triệu Chứng</th>
      <th scope="col">Bac Sĩ Điều Trị</th>
      <th scope="col">Chuyên Khoa</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($patients as $patient){
    ?>
        <tr>
            <th scope="row"><?php echo $patient -> getID();?></th>
            <td><?php echo $patient -> gettenBenhNhan();?></td>
            <td><?php echo $patient -> getngaykham();?></td>
            <td><?php echo $patient -> gettrieuChung();?></td>
            <td><?php echo $patient -> gettenBacSi();?></td>
            <td><?php echo $patient -> getchuyenKhoa();?></td>
            <td>
              <a href="<?= DOMAIN.'/app/views/patient/edit.php?id='.$patient->getID() ?>"><i class="bi bi-pencil-square"></i></a>
            </td>
            <td>
             <a href="<?= DOMAIN.'/app/views/patient/delete.php?id='.$patient->getID() ?>"><i class="bi bi-trash3"></i></a>

            </td>
        </tr>

    <?php
    }
    ?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>