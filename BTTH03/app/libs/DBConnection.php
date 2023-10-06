<?php
    class DBConection{ //định nghĩa của lớp DBConnection, đại diện cho việc kết nối đến cơ sở dữ liệu.
    private $host; //Lưu trữ địa chỉ máy chủ cơ sở dữ liệu.
    private $user; //Lưu trữ tên người dùng của cơ sở dữ liệu.
    private $pass; //Lưu trữ mật khẩu kết nối đến cơ sở dữ liệu.
    private $dbname; //Lưu trữ tên cơ sở dữ liệu.
    private $conn; //Lưu trữ đối tượng kết nối PDO.
  
    public function __construct(){ //hàm khởi tạo của lớp DBConnection. Nó được gọi tự động khi một đối tượng của lớp được tạo.
        $this -> host = DB_HOST;
        $this -> user = DB_USER;
        $this -> pass = PASS;
        $this -> dbname = DB_NAME; 
        try{
           $this -> conn = new PDO ("mysql:host ={$this->host};dbname={$this->dbname}",$this->user,$this->pass);
        }  catch(PDOException $e){
            $this -> conn = null;
    
        }
    }
    public function getConnection(){ //cho phép các phần khác của ứng dụng lấy đối tượng kết nối PDO để thực hiện các truy vấn đến cơ sở dữ liệu.
        return $this->conn;

    } 
}
?>
