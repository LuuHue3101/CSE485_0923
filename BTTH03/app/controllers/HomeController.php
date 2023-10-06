<?php
    require_once APP_ROOT.'/app/services/PatientService.php'; //sử dụng các lớp và chức năng từ tệp PatientService.php trong controller HomeController.
    class HomeController{ //chịu trách nhiệm điều phối yêu cầu từ người dùng và xử lý logic liên quan đến hiển thị dữ liệu.
        public function index(){ //Phương thức này xử lý yêu cầu khi người dùng truy cập trang chủ của ứng dụng.
            //goi du lieu tu PatientService
            $patientService = new PatientService(); // tạo một đối tượng của lớp PatientService. Đối tượng này sẽ được sử dụng để gọi các phương thức trong PatientService.php để lấy dữ liệu từ cơ sở dữ liệu hoặc thực hiện các thao tác liên quan đến dữ liệu của bệnh nhân.
            $patients = $patientService -> getAllPatients(); //
            //render du lieu lay dc ra HomePage
            include APP_ROOT.'/app/views/home/index.php';
        }
    }
?>