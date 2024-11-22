<?php
session_start();
$total = 0;

echo "<!DOCTYPE html>
<html lang='vi'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Thanh toán</title>
    <style>
        /* CSS đã thêm ở đây */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        img {
            max-width: 100px;
            height: auto;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px auto;
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            border-radius: 5px;
            text-align: center;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        p {
            text-align: center;
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>";

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    echo "<h1>Hóa đơn thanh toán</h1>";
    echo "<table>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Thành tiền</th>
            </tr>";
    
    foreach ($_SESSION['cart'] as $item) {
        $subtotal = $item['soluong'] * $item['gia'];
        $total += $subtotal;
        echo "<tr>
                <td>" . htmlspecialchars($item['ten_sp']) . "</td>
                <td><img src='../quantri/images-laptop/" . htmlspecialchars($item['hinh_anh']) . "'></td>
                <td>" . $item['soluong'] . "</td>
                <td>" . number_format($item['gia'], 0, ',', '.') . " VND</td>
                <td>" . number_format($subtotal, 0, ',', '.') . " VND</td>
              </tr>";
    }

    echo "<tr><td colspan='4'><strong>Tổng cộng</strong></td><td><strong>" . number_format($total, 0, ',', '.') . " VND</strong></td></tr>";
    echo "</table>";

    // Thêm nút thanh toán
    echo '<a href="process_payment.php" class="btn">Thanh toán</a>';
} else {
    echo "<p>Giỏ hàng của bạn trống. Vui lòng thêm sản phẩm.</p>";
}

echo "</body></html>";
?>
