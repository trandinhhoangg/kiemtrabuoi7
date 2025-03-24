<?php
require_once __DIR__ . '/../models/Auth.php';

class AuthController {
    private $authModel;

    public function __construct() {
        $this->authModel = new Auth();
    }

    public function showLoginForm() {
        require_once __DIR__ . '/../views/auth/login.php';
    }

    public function login() {
        session_start();
        $MaSV = $_POST['MaSV'];
        $_SESSION['MaSV'] = $MaSV;
        $student = $this->authModel->login($MaSV);

        if ($student) {
            if (isset($_SESSION['redirect_url'])) {
                $redirect_url = $_SESSION['redirect_url'];
                unset($_SESSION['redirect_url']); 
                header("Location: $redirect_url");
            } else {
                header("Location: routes.php?action=index");
            }
        } else {
            echo "Sai mã sinh viên!";
        }
    }
}
?>
