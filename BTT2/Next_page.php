<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        h2 {
            font-size: 20px;
        }
        /* h2:hover {
            color: orangered;
        } */
    </style>
</head>

<body>
    <div class="Container">
        <div class="Navbar">
            <div class="Nav_head">
                <div class="logo">
                    <a href="index.php"><img src="BT2Logo.png" alt="" style="width: 65px; height: 45px; "></a>
                    <a href="index.php"><img src="BT2.2Logo.png" alt="" style="width: 115px;height: 45px;"></a>
                </div>
            </div>
            <div class="Nav_main">
                <ul class="list" style="list-style: none;">
                    </div>
                    <div class="TUser">
                        <li style="display: flex;">
                            <i class="bi bi-person" style="margin:0px 20px"></i>
                            <h2 style="color:white">User</h2>
                            <a href="User.php" class="bi bi-caret-right-fill"></a>
                        </li>
                    </div>

                    <div class="TCMS">
                        <li style="display: flex;">
                            <i class="bi bi-box" style="margin:0px 20px"></i>
                            <h2>CMS</h2>
                            <i class="bi bi-caret-right-fill"></i>
                        </li>
                    </div>
                    <div class="TConfig">
                        <li style="display: flex;">
                            <i class="bi bi-gear" style="margin:0px 20px"></i>
                            <h2>Config</h2>
                            <i class="bi bi-caret-right-fill"></i>
                        </li>
                    </div>

                </ul>
            </div>
        </div>
        <div class="Main">
            <div class="Main_Header">
                <div class="HeaderL">
                    <i class="bi bi-list" style="padding:10px ; font-size: 40px;"></i>
                    <h1 style="padding-top:22px; font-size: 30px;">Dashboard</h1>
                </div>
                <div class="Header_R">
                    <form class="search-form">
                        <div class="search-label">
                            <a href=""><i class="bi bi-search" style="color:orange;margin:0px 15px;"></i></a>
                            <label for="search" class="visually-hidden">Search</label>
                            <input type="text" id="search" class="search-input" placeholder="       Search...">
                        </div>
                     </form>
                </div>
            </div>
                <div class="Main_container">
                    <div class="Main_containerH">
                        <span>
                            <form>
                                <h1 style="font-size:17px;margin:0px 0 0 20px; color: orangered">
                                        <br>
                                        Filter
                                    </h1>
                                <div class="form-row" style="display:flex ; justify-content: space-between; ">
                                    <div class="col">
                                        <input style="width:250px; margin:20px; " type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col">
                                        <input style="width:250px; margin:20px;" type="text" class="form-control" placeholder="0">
                                    </div>
                                    <div class="col">
                                        <select class="custom-select" style="width:250px;height:38px ;margin:20px;float:right;border-radius:10px" required>
                                            <option value="">Select Group</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Manager</option>
                                            <option value="3">Customer</option>
                                        </select>
                                    </div>
                                    <div class="btt">
                                        <span>
                                            <button style="background-color:white;color:orangered;float: right;margin:20px;border: 1px solid orangered; width:100px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
                                                Filer
                                            </button>
                                        </span>
                                        <span>
                                            <button style="background-color:orangered;float: right;margin:20px;border: none; width:100px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
                                                Clear
                                            </button>
                                        </span> 

                                    </div>
                                </div>
                            </form>
                        </span>

                    </div>
                    <div class="Container_table text-center" style="margin:120px 0px 0px 30px; width: 95%;height: 470px;">
                        <span class="tagrow" style="display: inline-block;">
                            <h1 style="color:orangered; text-align: left;float: left; margin:20px 0 0 20px ;font-size:30px">Users</h1>
                            <span>
                                <button style="border-radius:0 5px 5px 0;display: flex;background-color:orangered;float: right;margin:20px 50px 20px 0px;border:none; width:40px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
                                                <i style="margin-right:20px" class="bi bi-plus"></i>
                                </button>
                                <button style="border-radius:5px 0 0 5px;display: flex;background-color:orangered;float: right;margin:20px 0px 20px 0px;border:none;border-right: 1px solid white; width:100px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
                                                ADD USER
                                        
                                </button>
                            </span>
                            <span>
                                <button style="background-color:white;color:orangered;float: right;margin:20px 10px 20px 0;border: 1px solid orangered; width:100px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
                                                Delete
                                </button>
                            </span>
                        </span> 
                        <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dữ liệu người dùng sẽ được hiển thị ở đây -->
                            <?php
                                $servername = "localhost"; // Tên máy chủ MariaDB (hoặc MySQL)
                                $username = "root"; // Tên người dùng cơ sở dữ liệu
                                $password = "123"; // Mật khẩu cơ sở dữ liệu
                                $database = "test_demo"; // Tên cơ sở dữ liệu
                                $table = "user"; // Tên bảng bạn muốn hiển thị dữ liệu
                                $startRow = 0; // Vị trí bắt đầu là 0
                                $limit = 10;   // Số lượng dòng bạn muốn lấy mỗi lần
                                $startRow += $limit; // Tăng vị trí bắt đầu lên 10
                                // Tạo kết nối đến cơ sở dữ liệu
                                $conn = new mysqli($servername, $username, $password, $database);
                                // Kiểm tra kết nối
                                if ($conn->connect_error) {
                                die("Kết nối đến cơ sở dữ liệu không thành công: " . $conn->connect_error);
                                }
                                    // SQL query để lấy dữ liệu từ bảng
                                $startRow += $limit; // Tăng vị trí bắt đầu lên 10
                                $sql = "SELECT * FROM $table LIMIT $limit OFFSET $startRow";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row["ID"] . "</td>";
                                    echo "<td>" . $row["Ten"] . "</td>";
                                    echo "<td>" . $row["Email"] . "</td>";
                                    echo "<td style='display: flex;'>";
                                    
                                    // Liên kết xem (eye icon) với một URL cụ thể   
                                    echo'<form method="POST" action="User_Form.php" style="transform: translateX(245%);">
                                        <input type="hidden" name="record_id_to_form" value="ID">
                                        <a href="User_Delete.php' . $row["ID"] . '"><button name="delete_button" type="submit" style="background-color:orangered;border:none;border-radius:5px;margin:2px"><i style="color:white" class="bi bi-eye"></i></button>
                                    </form>';
                                    

                                    // Liên kết sửa (pencil icon) với một URL cụ thể
                                    echo'<form method="POST" action="User_Edit.php" style="transform: translateX(250%);">
                                        <input type="hidden" name="record_id_to_edit" value="ID">
                                        <a href="User_Delete.php' . $row["ID"] . '"><button name="delete_button" type="submit" style="background-color:orangered;border:none;border-radius:5px;margin:2px"><i style="color:white" class="bi bi-pencil"></i></button>
                                    </form>';


                                    // Liên kết xóa (trash icon) với một URL cụ thể
                                    echo'<form method="POST" action="User_Delete.php" style="transform: translateX(255%);">
                                        <input type="hidden" name="record_id_to_delete" value="ID">
                                        <a href="User_Delete.php' . $row["ID"] . '"><button name="delete_button" type="submit" style="background-color:orangered;border:none;border-radius:5px;margin:2px"><i style="color:white" class="bi bi-trash3"></i></button>
                                    </form>';
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                } else {
                                    echo "Không có dữ liệu trong bảng $table.";
                                }
                            // Đóng kết nối
                            $conn->close();
                            ?>                     
                    </tbody>
                </table>
                 <div style="width: 100%;height: 80px; background-color:white;border-radius:0 0px 5px 0;position: relative; bottom:16px">
                   <ul class="pagination" >
                       <li class="page-item disabled" style="margin-top:20px">
                   <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Trước</a>
               </li>
               <li class="page-item" style="margin-top:20px" aria-current="page">
                    <a class="page-link" href="User.php">1</a>
               </li>
               <!-- Các liên kết chuyển trang sẽ được thêm ở đây -->
               <li class="page-item active" style="margin-top:20px"><a class="page-link" href="Next_page.php">2</a></li>
               <li class="page-item" style="margin-top:20px"><a class="page-link" href="#">3</a></li>
               <li class="page-item" style="margin-top:20px">
                   <a class="page-link" href="#">Tiếp</a>
               </li>
                   </ul>
                </div> 
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>