<?php include 'views/layout/header.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Sinh Viên</title>
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 900px;
            margin: auto;
        }
        h2 {
            color: #333;
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
            text-transform: uppercase;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        img {
            border-radius: 5px;
            width: 50px;
            height: auto;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 5px;
        }
        .btn {
            text-decoration: none;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        .btn:hover {
            opacity: 0.8;
        }
        .btn-add {
            background: #007bff;
            display: inline-block;
            margin-bottom: 15px;
        }
        .btn-edit { background: #ffc107; }
        .btn-detail { background: #17a2b8; }
        .btn-delete { background: #dc3545; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Danh Sách Sinh Viên</h2>
        <a href="routes.php?action=create" class="btn btn-add">+ Thêm Sinh Viên</a>
        <table>
            <tr>
                <th>Mã SV</th>
                <th>Họ Tên</th>
                <th>Giới Tính</th>
                <th>Ngày Sinh</th>
                <th>Hình</th>
                <th>Ngành</th>
                <th>Hành động</th>
            </tr>
            <?php while ($row = $students->fetch_assoc()) : ?>
                <tr>
                    <td><?= $row['MaSV'] ?></td>
                    <td><?= $row['HoTen'] ?></td>
                    <td><?= $row['GioiTinh'] ?></td>
                    <td><?= $row['NgaySinh'] ?></td>
                    <td><img src="<?= $row['Hinh'] ?>" alt="Hình Sinh Viên"></td>
                    <td><?= $row['MaNganh'] ?></td>
                    <td>
                        <div class="btn-container">
                            <a href="routes.php?action=edit&MaSV=<?= $row['MaSV'] ?>" class="btn btn-edit">Sửa</a>
                            <a href="routes.php?action=detail&MaSV=<?= $row['MaSV'] ?>" class="btn btn-detail">Chi Tiết</a>
                            <a href="routes.php?action=confirmDelete&MaSV=<?= $row['MaSV'] ?>" class="btn btn-delete" onclick="return confirm('Bạn có chắc muốn xóa?');">Xóa</a>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
