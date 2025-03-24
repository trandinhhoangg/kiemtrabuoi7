<?php
require_once 'models/Registration.php';
require_once 'models/Course.php';

class RegistrationController {
    private $registrationModel;
    private $courseModel;

    public function __construct() {
        $this->registrationModel = new RegistrationModel();
        $this->courseModel = new Course();
    }

    public function index() {
        $registrations = $this->registrationModel->getRegistrations();
        require_once 'views/registrations/index.php';
    }

    public function registerCourse() {
        session_start();

       
        if (!isset($_SESSION['MaSV'])) {
            $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI']; 
            header("Location: routes.php?action=login"); 
            exit();
        }

        // Lấy MaHP từ request
        if (isset($_GET['MaHP'])) {
            $maHP = $_GET['MaHP'];
            $maSV = $_SESSION['MaSV']; // Lấy MSSV từ session
            $ngayDK = date('Y-m-d H:i:s'); // Ngày đăng ký hiện tại

            // Thêm vào database
            $this->registrationModel->register($maSV, $maHP, $ngayDK);
        }

        // Chuyển hướng đến danh sách học phần đã đăng ký
        header("Location: routes.php?action=viewRegistrations");
        exit();
    }

    public function deleteRegistration($maHP) {
        $this->registrationModel->delete($maHP);
        header("Location: routes.php?action=registrations");
    }

    public function clearAll() {
        $this->registrationModel->clearAll();
        header("Location: routes.php?action=registrations");
    }
}
?>
