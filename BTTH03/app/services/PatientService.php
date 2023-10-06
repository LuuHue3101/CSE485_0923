<?php
require_once APP_ROOT.'/app/models/Patient.php';
// đưa vào tệp Patient.php, trong đó định nghĩa lớp Patient. Lớp Patient được sử dụng để biểu diễn thông tin về bệnh nhân.
class PatientService {
    public function getAllPatients() { // lấy tất cả bệnh nhân từ cơ sở dữ liệu.
        // Buoc 1: ket noi database
        $DBConection = new DBConection(); //Tạo một đối tượng của lớp DBConnection để kết nối đến cơ sở dữ liệu.
        $conn = $DBConection->getConnection();
        
        if ($conn !== null) { 
            
            // Buoc 2: truy van du lieu
            $sql = "SELECT 
            BenhNhan.id AS 'ID Bệnh Nhân',
            BenhNhan.tenBenhNhan AS 'Tên Bệnh Nhân',
            BenhNhan.ngayKham AS 'Ngày Khám',
            BenhNhan.trieuChung AS 'Triệu Chứng',
            BacSi.tenBacSi AS 'Tên Bác Sĩ',
            BacSi.chuyenKhoa AS 'Chuyên Khoa'
        FROM BenhNhan
        INNER JOIN BacSi ON BenhNhan.idBacSi = BacSi.id;"; //Tạo một câu truy vấn SQL để lấy dữ liệu từ bảng "Patients".
            $stmt = $conn->query($sql); //Thực hiện truy vấn bằng cách sử dụng đối tượng kết nối PDO ($conn->query($sql)).
            
            // Xu ly ket qua tra ve
            $patients = [];
            
            while ($row = $stmt->fetch()) { //Lặp qua từng hàng kết quả trả về từ truy vấn bằng cách sử dụng vòng lặp while.
                $patient = new Patient($row['ID Bệnh Nhân'], $row['Tên Bệnh Nhân'], $row['Ngày Khám'], $row['Triệu Chứng'], $row['Tên Bác Sĩ'], $row['Chuyên Khoa']);
                $patients[] = $patient;
                //Với mỗi hàng, tạo một đối tượng Patient mới bằng cách sử dụng các cột 
                //từ kết quả truy vấn và thêm đối tượng Patient vào mảng $patients.
            }
            
            return $patients; //trả về mảng $patients chứa danh sách các đối tượng Patient biểu diễn thông tin về bệnh nhân trong cơ sở dữ liệu.
        }
    }
}
?>