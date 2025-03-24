<?php
class Database {
    private static $host = "localhost";
    private static $user = "root";
    private static $pass = "";
    private static $dbname = "test1";
    public static $conn;

    public static function connect() {
        if (!isset(self::$conn)) {
            self::$conn = new mysqli(self::$host, self::$user, self::$pass, self::$dbname);
            if (self::$conn->connect_error) {
                die("Kết nối thất bại: " . self::$conn->connect_error);
            }
        }
        return self::$conn;
    }
}
?>
