<?php
require_once __DIR__ . '/../config/database.php';

class Course {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function getAllCourses() {
        $sql = "SELECT * FROM HocPhan";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
