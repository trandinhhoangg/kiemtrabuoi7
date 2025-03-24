<?php
require_once __DIR__ . '/../config/database.php';

class RegistrationModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getRegistrations() {
        $query = "SELECT r.MaHP, c.TenHP, c.SoTinChi FROM registrations r 
                  JOIN courses c ON r.MaHP = c.MaHP";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function register($maSV, $maHP, $ngayDK) {
        $query = "INSERT INTO registrations (MaSV, MaHP, NgayDK) VALUES (:MaSV, :MaHP, :NgayDK)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':MaSV', $maSV);
        $stmt->bindParam(':MaHP', $maHP);
        $stmt->bindParam(':NgayDK', $ngayDK);
        $stmt->execute();
    }
    

    public function delete($maHP) {
        $query = "DELETE FROM registrations WHERE MaHP = :MaHP";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':MaHP', $maHP);
        $stmt->execute();
    }

    public function clearAll() {
        $query = "DELETE FROM registrations";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
}
?>
