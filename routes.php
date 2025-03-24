<?php
require_once __DIR__ . '/controllers/StudentController.php';
require_once 'controllers/CourseController.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/RegistrationController.php';
$controller = new StudentController();
$courseController = new CourseController();
$authController = new AuthController();
$registrationController = new RegistrationController();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$MaSV = isset($_GET['MaSV']) ? $_GET['MaSV'] : null;

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        if ($MaSV) $controller->edit($MaSV);
        break;
    case 'detail':
        if ($MaSV) $controller->detail($_GET['MaSV']);
        break;
    case 'confirmDelete':
        if ($MaSV) $controller->confirmDelete($_GET['MaSV']);
        break;
    case 'delete':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $controller->delete($_GET['MaSV']);
        }
        break;
    case 'courses':
        $courseController->index();
        break;
    case 'loginForm':
        $authController = new AuthController();
        $authController->showLoginForm();
        break;

    case 'login':
        $authController->login();
        break;
    case 'registerCourse':
        $registrationController->registerCourse($_GET['MaHP']);
        break;
    case 'registrations':
        $registrationController->index();
        break;
    default:
        echo "Trang không tồn tại!";
        break;
}
