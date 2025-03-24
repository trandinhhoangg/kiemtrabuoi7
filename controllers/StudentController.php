<?php
require_once __DIR__ . '/../models/Student.php';

class StudentController {
    private $studentModel;

    public function __construct() {
        $this->studentModel = new Student();
    }

    public function index() {
        $students = $this->studentModel->getAll();
        require_once __DIR__ . '/../views/students/index.php';
    }

    public function detail($id) {
        $student = $this->studentModel->getDetail($id);
        require_once __DIR__ . '/../views/students/details.php';
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once __DIR__ . '/../helpers/ImageHelper.php';
            if (isset($_FILES['Hinh'])) {
                $_POST['Hinh'] = ImageHelper::uploadImage($_FILES['Hinh']);
            }

            $this->studentModel->create($_POST);
            header("Location: routes.php?action=index");
        } else {
            $majors = $this->studentModel->getMajors(); // Lấy danh sách ngành
            require_once __DIR__ . '/../views/students/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once __DIR__ . '/../helpers/ImageHelper.php';
            if (isset($_FILES['Hinh']) && $_FILES['Hinh']['error'] == 0) {
                $_POST['Hinh'] = ImageHelper::uploadImage($_FILES['Hinh']);
            } else {
                $_POST['Hinh'] = $_POST['OldHinh'];
            }

            $this->studentModel->update($id, $_POST);
            header("Location: routes.php?action=index");
        } else {
            $student = $this->studentModel->getById($id);
            $majors = $this->studentModel->getMajors();
            require_once __DIR__ . '/../views/students/edit.php';
        }
    }

    public function confirmDelete($id) {
        $student = $this->studentModel->getDetail($id);
        require_once __DIR__ . '/../views/students/delete.php';
    }
    public function delete($id) {
        $this->studentModel->delete($id);
        header("Location: routes.php?action=index");
        exit();
    }
}
?>
