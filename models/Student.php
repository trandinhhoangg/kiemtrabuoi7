<?php
require_once __DIR__ . '/../config/database.php';

class Student {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }
    public function getMajors() {
        $sql = "SELECT MaNganh, TenNganh FROM NganhHoc"; // Bảng chứa ngành học
        return $this->conn->query($sql);
    }

    public function getAll() {
        $sql = "SELECT * FROM SinhVien";
        return $this->conn->query($sql);
    }

    public function getById($id) {
        $sql = "SELECT * FROM SinhVien WHERE MaSV = '$id'";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function getDetail($id) {
        $sql = "SELECT sv.MaSV, sv.HoTen, sv.GioiTinh, sv.NgaySinh, sv.Hinh, n.TenNganh 
                FROM SinhVien sv 
                JOIN NganhHoc n ON sv.MaNganh = n.MaNganh
                WHERE sv.MaSV = '$id'";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function create($data) {
        $sql = "INSERT INTO SinhVien (MaSV, HoTen, GioiTinh, NgaySinh, Hinh, MaNganh) 
                VALUES ('{$data['MaSV']}', '{$data['HoTen']}', '{$data['GioiTinh']}', 
                        '{$data['NgaySinh']}', '{$data['Hinh']}', '{$data['MaNganh']}')";
        return $this->conn->query($sql);
    }

    
    public function update($id, $data) {
        $sql = "UPDATE SinhVien SET 
                HoTen='{$data['HoTen']}', 
                GioiTinh='{$data['GioiTinh']}', 
                NgaySinh='{$data['NgaySinh']}', 
                Hinh='{$data['Hinh']}', 
                MaNganh='{$data['MaNganh']}' 
                WHERE MaSV='$id'";
        return $this->conn->query($sql);
    }

     public function delete($id) {
        $sql = "DELETE FROM SinhVien WHERE MaSV = '$id'";
        return $this->conn->query($sql);
    }
}
?>
