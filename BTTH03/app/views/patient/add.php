<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm bệnh nhân</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="wrapped w-25 mt-5">
          <form method="POST" action="?controller=student&action=store">
            <div class="mb-3">
              <label for="id" class="form-label">Mã bệnh nhân</label>
              <input type="text" name="id" id="id" class="form-control">
            </div>
            <div class="mb-3">
              <label for="nameStudent" class="form-label">Tên bệnh nhân</label>
              <input type="text" name="nameStudent" id="nameStudent" class="form-control">
            </div>
            <div class="mb-3">
              <label for="dateOfBirth" class="form-label">Ngày khám</label>
              <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Triệu chứng</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
              <label for="idLop" class="form-label">Bác sĩ điều trị</label>
              <input type="text" name="idLop" id="idLop" class="form-control">
            </div>
            <div class="mb-3">
              <label for="idLop" class="form-label">Chuyên khoa</label>
              <input type="text" name="idLop" id="idLop" class="form-control">
            </div>
            <button class="btn btn-primary">Thêm</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>