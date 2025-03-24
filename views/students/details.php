<?php include 'views/layout/header.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi Tiết Sinh Viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            background: #fff;
            padding: 20px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            color: #333;
        }
        .student-info p {
            font-size: 18px;
            margin: 10px 0;
        }
        .student-img {
            margin: 20px 0;
        }
        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .back-btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Chi Tiết Sinh Viên</h2>
        <div class="student-info">
            <p><strong>Mã SV:</strong> <?= $student['MaSV'] ?></p>
            <p><strong>Họ Tên:</strong> <?= $student['HoTen'] ?></p>
            <p><strong>Giới Tính:</strong> <?= $student['GioiTinh'] ?></p>
            <p><strong>Ngày Sinh:</strong> <?= $student['NgaySinh'] ?></p>
            <p><strong>Ngành:</strong> <?= $student['TenNganh'] ?></p>
            <div class="student-img">
                <img src="<?= $student['Hinh'] ?>" width="150" alt="Hình Sinh Viên" style="border-radius: 8px; border: 1px solid #ddd; padding: 5px;">
            </div>
        </div>
        <a href="routes.php?action=index" class="back-btn">Quay lại danh sách</a>
    </div>
</body>
</html>