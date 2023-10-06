<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sửa sinh viên</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="wrapped w-25 mt-5">
          <form method="POST" action="?controller=student&action=update">
            <div class="mb-3">
              <label for="id" class="form-label">Mã sinh viên</label>
              <input type="text" name="id" id="id" class="form-control" readonly value="<?= $each->getID(); ?>">
            </div>
            <div class="mb-3">
              <label for="nameStudent" class="form-label">Tên sinh viên</label>
              <input type="text" name="nameStudent" id="nameStudent" class="form-control" value="<?= $each->getNameStudent(); ?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control" value="<?= $each->getEmail(); ?>">
            </div>
            <div class="mb-3">
              <label for="dateOfBirth" class="form-label">Ngày sinh</label>
              <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control" value="<?= $each->getDateOfBirth(); ?>">
            </div>
            <div class="mb-3">
              <label for="idLop" class="form-label">Mã lớp</label>
              <input type="text" name="idLop" id="idLop" class="form-control" value="<?= $each->getIdClass(); ?>">
            </div>
            <button class="btn btn-primary">Sửa</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>