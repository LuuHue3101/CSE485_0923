<?php 
    class Patient{ // lớp Patient trong PHP để biểu diễn thông tin về bệnh nhân.
        //properties
        private $id;
        private $tenBanhNhan;
        private $ngaykham;
        private $trieuChung;
        private $tenBacSi;
        private $chuyenkhoa;
        //methods
        public function __construct($id,$tenBenhNhan,$ngaykham,$trieuChung,$tenBacSi,$chuyenkhoa){ //hàm khởi tạo 
            $this -> id = $id;
            $this -> tenBanhNhan = $tenBenhNhan;
            $this -> ngaykham = $ngaykham;
            $this -> trieuChung = $trieuChung;
            $this -> tenBacSi = $tenBacSi;
            $this -> chuyenkhoa = $chuyenkhoa;
        }

        //Phương thức getter và setter
        //phương thức getter (lấy giá trị) và 
        //phương thức setter (đặt giá trị) cho mỗi thuộc tính
        public function getID(){
            return $this -> id;
        }
        public function gettenBenhNhan(){
            return $this -> tenBanhNhan;
        }
        public function getngaykham(){
            return $this -> ngaykham;
        }
        public function gettrieuChung(){
            return $this -> trieuChung;
        }
        public function gettenBacSi(){
            return $this -> tenBacSi;
        }
        public function getchuyenKhoa(){
            return $this -> chuyenkhoa;
        }

        public function settenBenhNhan($tenBanhNhan){
            $this  -> tenBanhNhan = $tenBanhNhan;
        }
    }

?>