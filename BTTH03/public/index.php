<?php
require_once('../app/config/config.php'); //Đây là việc bạn đưa vào tệp cấu hình của ứng dụng, giả sử nó chứa các thiết lập quan trọng như thông tin về cơ sở dữ liệu, đường dẫn gốc của ứng dụng (APP_ROOT).
require_once APP_ROOT.'/app/libs/DBConnection.php'; //Đoạn này là để đưa vào tệp chứa lớp DBConnection để kết nối với cơ sở dữ liệu. APP_ROOT là một biến được định nghĩa trong tệp cấu hình và chứa đường dẫn gốc của ứng dụng.

//Xác định Controller và Action:
$controller = isset($_GET['controller'])?$_GET['controller']:'home'; //kiểm tra xem có tham số controller trong URL không. Nếu có, nó sẽ sử dụng giá trị của tham số đó. Nếu không, mặc định là 'home'.
$action = isset($_GET['action'])?$_GET['action']:'index'; //kiểm tra xem có tham số action trong URL không. Nếu có, nó sẽ sử dụng giá trị của tham số đó. Nếu không, mặc định là 'index'.

//Xử lý Controller và Action:
if ($controller == 'home'){ //nếu controller là 'home', nó sẽ require một tệp HomeController.php và gọi phương thức index() trên đối tượng HomeController.
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController -> index();
}
else if($controller == 'patient'){
    // require_once APP_ROOT.'/app/controllers/PatientController.php';
    // $patientController = new PatientController();
    // $patientController -> index();
}else{
    echo"file ko ton tai";
}
?>