<?php
require_once __DIR__ . '/../models/Course.php';

class CourseController {
    private $courseModel;

    public function __construct() {
        $this->courseModel = new Course();
    }

    public function index() {
        $courses = $this->courseModel->getAllCourses();
        require_once __DIR__ . '/../views/courses/index.php';
    }
}
?>
