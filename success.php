<?php
// Nhận dữ liệu từ form
$room_id = $_POST['room_id'] ?? '';
$roomName = $_POST['roomName'] ?? '';
$price = $_POST['price'] ?? '';
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$checkin = $_POST['checkin'] ?? '';
$checkout = $_POST['checkout'] ?? '';
$method = $_POST['method'] ?? '';

// Kiểm tra thông tin
if (!$room_id || !$price || !$fullname || !$email || !$phone || !$checkin || !$checkout) {
    echo "Thiếu thông tin, vui lòng quay lại <a href='index.php'>Trang chủ</a>";
    exit;
}

// Xử lý phương thức thanh toán
switch ($method) {
    case "momo": $method_text = "Momo"; break;
    case "vnpay": $method_text = "VNPay"; break;
    case "bank": $method_text = "Chuyển khoản ngân hàng"; break;
    default: $method_text = "Không xác định";
}

// Tính số đêm
$checkin_date = new DateTime($checkin);
$checkout_date = new DateTime($checkout);
$interval = $checkin_date->diff($checkout_date);
$nights = $interval->days;

// Tính tổng tiền
$total = $nights * $price;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Thanh toán thành công</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="success-container">
        <h1>Cảm ơn bạn đã ủng hộ homstay mèo meo</h1>
        <!-- Bảng 1: Thông tin khách hàng -->
        <h2>Thông tin khách hàng</h2>
        <table class="info-table">
            <tr>
                <th>Họ và tên</th>
                <td><?php echo htmlspecialchars($fullname); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo htmlspecialchars($email); ?></td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td><?php echo htmlspecialchars($phone); ?></td>
            </tr>
        </table>

        <!-- Bảng 2: Thông tin đặt phòng -->
        <h2>Thông tin đặt phòng</h2>
        <table class="info-table">
            <tr>
                <th>Tên phòng</th>
                <td><?php echo htmlspecialchars($roomName); ?></td>
            </tr>
            <tr>
                <th>Ngày nhận phòng</th>
                <td><?php echo $checkin; ?></td>
            </tr>
            <tr>
                <th>Ngày trả phòng</th>
                <td><?php echo $checkout; ?></td>
            </tr>
            <tr>
                <th>Số đêm</th>
                <td><?php echo $nights; ?></td>
            </tr>
            <tr>
                <th>Giá mỗi đêm</th>
                <td><?php echo number_format($price, 0, ',', '.'); ?> VNĐ</td>
            </tr>
            <tr>
                <th>Tổng tiền</th>
                <td><strong><?php echo number_format($total, 0, ',', '.'); ?> VNĐ</strong></td>
            </tr>
            <tr>
                <th>Phương thức thanh toán</th>
                <td><?php echo $method_text; ?></td>
            </tr>
        </table>

        <a href="index.php" class="btn">Quay lại Trang chủ</a>
    </div>
</body>

</html>