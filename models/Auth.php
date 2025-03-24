<?php
require_once __DIR__ . '/../config/database.php';

class Auth {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function login($MaSV) {
        $sql = "SELECT * FROM SinhVien WHERE MaSV = '$MaSV'";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }
}
?>
