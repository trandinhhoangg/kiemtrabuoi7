<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sinh Viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            background: linear-gradient(90deg, #007bff, #00c6ff);
            padding: 10px 0;
            text-align: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
            font-size: 18px;
            font-weight: bold;
            transition: background 0.3s ease-in-out;
        }
        .navbar a:hover {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }
        .navbar .active {
            background: #ff5733;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="routes.php?action=index">Trang chủ</a>
        <a href="routes.php?action=index">Sinh Viên</a>
        <a href="routes.php?action=courses">Học Phần</a>
        <a href="routes.php?action=registerCourse" class="active">Đăng Kí</a>
        <a href="routes.php?action=loginForm">Đăng Nhập</a>
    </div>
</body>
</html>