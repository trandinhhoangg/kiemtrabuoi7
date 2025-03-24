<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xác Nhận Xóa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        img {
            border-radius: 5px;
            margin: 10px 0;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            margin: 5px;
        }
        .btn-danger { background: #d9534f; }
        .btn-danger:hover { background: #c9302c; }
        .btn-cancel { background: #5bc0de; }
        .btn-cancel:hover { background: #31b0d5; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Xác Nhận Xóa Sinh Viên</h2>
        <p><strong>Mã SV:</strong> <?= $student['MaSV'] ?></p>
        <p><strong>Họ Tên:</strong> <?= $student['HoTen'] ?></p>
        <p><strong>Giới Tính:</strong> <?= $student['GioiTinh'] ?></p>
        <p><strong>Ngày Sinh:</strong> <?= $student['NgaySinh'] ?></p>
        <p><strong>Ngành:</strong> <?= $student['TenNganh'] ?></p>
        <p><strong>Hình Ảnh:</strong></p>
        <img src="<?= $student['Hinh'] ?>" width="150" alt="Hình Sinh Viên">
        
        <p>Bạn có chắc chắn muốn xóa sinh viên này không?</p>
        <form action="routes.php?action=delete&MaSV=<?= $student['MaSV'] ?>" method="POST">
            <button type="submit" class="btn btn-danger">Xóa</button>
            <a href="routes.php?action=index" class="btn btn-cancel">Hủy</a>
        </form>
    </div>
</body>
</html>
