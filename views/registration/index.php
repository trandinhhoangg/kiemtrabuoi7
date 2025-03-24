<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Học Phần</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        h2 {
            margin-bottom: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }
        a[href*='deleteRegistration'] {
            background-color: #dc3545;
        }
        a[href*='deleteRegistration']:hover {
            background-color: #c82333;
        }
        .clear-all {
            color: white;
            background-color: red;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .clear-all:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <h2>Đăng Ký Học Phần</h2>
    <table>
        <tr>
            <th>Mã HP</th>
            <th>Tên Học Phần</th>
            <th>Số Tín Chỉ</th>
            <th>Hành Động</th>
        </tr>
        <?php 
        $totalCredits = 0;
        $totalCourses = count($registrations);
        foreach ($registrations as $row) { 
            $totalCredits += $row['SoTinChi'];
        ?>
        <tr>
            <td><?= $row['MaHP']; ?></td>
            <td><?= $row['TenHP']; ?></td>
            <td><?= $row['SoTinChi']; ?></td>
            <td><a href="routes.php?action=deleteRegistration&MaHP=<?= $row['MaHP']; ?>">Xóa</a></td>
        </tr>
        <?php } ?>
    </table>
    
    <p><strong>Số học phần:</strong> <?= $totalCourses; ?></p>
    <p><strong>Tổng số tín chỉ:</strong> <?= $totalCredits; ?></p>
    
    <a href="routes.php?action=clearAll" class="clear-all">Xóa Đăng Ký</a>
</body>
</html>