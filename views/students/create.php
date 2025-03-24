<?php include 'views/layout/header.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Sinh Viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            width: 50%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2 {
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input, select {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="file"] {
            border: none;
        }
        input[type="submit"] {
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thêm Sinh Viên</h2>
        <form action="routes.php?action=create" method="POST" enctype="multipart/form-data">
            <input type="text" name="MaSV" placeholder="Mã SV" required>
            <input type="text" name="HoTen" placeholder="Họ Tên" required>
            <select name="GioiTinh">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
            <input type="date" name="NgaySinh" required>
            <input type="file" name="Hinh" accept="image/*" required>
            <select name="MaNganh" required>
                <?php while ($row = $majors->fetch_assoc()) : ?>
                    <option value="<?= $row['MaNganh'] ?>"><?= $row['TenNganh'] ?></option>
                <?php endwhile; ?>
            </select>
            <input type="submit" value="Thêm">
        </form>
    </div>
</body>
</html>