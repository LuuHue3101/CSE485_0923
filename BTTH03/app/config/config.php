<?php
// định nghĩa các thiết lập và biến toàn cục cho ứng dụng 
define('APP_ROOT',dirname(__FILE__,3)); //lấy đường dẫn tới thư mục gốc của ứng dụng, cụ thể là 3 cấp thư mục phía trên tệp config.php. Điều này giúp bạn đảm bảo rằng APP_ROOT chứa đường dẫn đúng đến thư mục gốc của ứng dụng.
define('DOMAIN','http://localhost/EXAM/'); //đường dẫn đến ứng dụng trên máy chủ cục bộ.
define('DB_HOST','localhost'); // Địa chỉ máy chủ cơ sở dữ liệu
define('DB_USER','root'); // Tên người dùng cơ sở dữ liệu
define('PASS','123'); //Mật khẩu cho người dùng cơ sở dữ liệu.
define('DB_NAME','PhongMach'); //Tên cơ sở dữ liệu mà ứng dụng của bạn sẽ sử dụng.
?>