<?php include 'views/layout/header.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa Sinh Viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        h2 {
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        img {
            margin: 10px 0;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sửa Sinh Viên</h2>
        <form action="routes.php?action=edit&MaSV=<?= $student['MaSV'] ?>" method="POST" enctype="multipart/form-data">
            <label>Mã SV:</label>
            <input type="text" name="MaSV" value="<?= $student['MaSV'] ?>" readonly>
            
            <label>Họ Tên:</label>
            <input type="text" name="HoTen" value="<?= $student['HoTen'] ?>" required>
            
            <label>Giới Tính:</label>
            <select name="GioiTinh">
                <option value="Nam" <?= $student['GioiTinh'] == "Nam" ? "selected" : "" ?>>Nam</option>
                <option value="Nữ" <?= $student['GioiTinh'] == "Nữ" ? "selected" : "" ?>>Nữ</option>
            </select>
            
            <label>Ngày Sinh:</label>
            <input type="date" name="NgaySinh" value="<?= $student['NgaySinh'] ?>" required>
            
            <label>Hình Ảnh:</label>
            <img src="<?= $student['Hinh'] ?>" width="100" alt="Hình Sinh Viên">
            <input type="file" name="Hinh" accept="image/*">
            <input type="hidden" name="OldHinh" value="<?= $student['Hinh'] ?>">
            
            <label>Ngành:</label>
            <select name="MaNganh" required>
                <?php while ($row = $majors->fetch_assoc()) : ?>
                    <option value="<?= $row['MaNganh'] ?>" <?= $row['MaNganh'] == $student['MaNganh'] ? "selected" : "" ?>>
                        <?= $row['TenNganh'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
            
            <input type="submit" value="Cập Nhật">
        </form>
    </div>
</body>
</html>