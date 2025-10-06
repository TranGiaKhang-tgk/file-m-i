<?php
$rooms = [
    1 => ["name" => "Homestay Biển Xanh", "price" => 800000],
    2 => ["name" => "Homestay Núi Rừng", "price" => 700000],
    3 => ["name" => "Homestay Sân Vườn", "price" => 600000],
    4 => ["name" => "Homestay Hồ Bơi", "price" => 900000],
    5 => ["name" => "Homestay Gần Chợ", "price" => 500000],
    6 => ["name" => "Homestay Gia Đình", "price" => 1200000],
    7 => ["name" => "Homestay View Đồi", "price" => 650000],
    8 => ["name" => "Homestay View Hồ Bơi", "price" => 650000],
    9 => ["name" => "Homestay Kiểu Châu Âu", "price" => 650000],
];

// Lấy id từ URL
$id = $_GET['id'] ?? 0;
if (!isset($rooms[$id])) {
    echo "Không tìm thấy phòng!";
    exit;
}
$room = $rooms[$id];
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Thanh toán - <?php echo $room['name']; ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background: #fff;
    }

    header {
        text-align: center;
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .payment-container {
        background: white;
        padding: 20px;
        max-width: 500px;
        margin: auto;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .btn {
        display: inline-block;
        padding: 10px 15px;
        margin-top: 10px;
        text-decoration: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn.continue {
        background: blue;
        color: white;
    }

    .btn.pay {
        background: green;
        color: white;
        display: none;
    }

    .btn.back {
        background: gray;
        color: white;
    }

    .qr-box {
        text-align: center;
        margin: 15px 0;
        display: none;
    }

    img.qr {
        width: 220px;
        height: auto;
        border: 1px solid #ddd;
        padding: 10px;
        background: #fff;
    }

    label {
        font-weight: bold;
    }

    input,
    select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <header>Thanh toán Homestay</header>

    <div class="payment-container">
        <h3><?php echo $room['name']; ?></h3>
        <p><strong>Số tiền cần thanh toán:</strong> <?php echo number_format($room['price'], 0, ',', '.'); ?> VNĐ/đêm
        </p>

        <form id="paymentForm" action="success.php" method="post">
            <input type="hidden" name="room_id" value="<?php echo $id; ?>">
            <input type="hidden" name="price" value="<?php echo $room['price']; ?>">
            <input type="hidden" name="roomName" value="<?php echo $room['name']; ?>">

            <label>Họ tên:</label>
            <input type="text" name="fullname" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Số điện thoại:</label>
            <input type="text" name="phone" required pattern="[0-9]{9,11}" placeholder="Nhập số điện thoại">

            <label>Ngày nhận phòng:</label>
            <input type="date" name="checkin" required>

            <label>Ngày trả phòng:</label>
            <input type="date" name="checkout" required>

            <label>Phương thức thanh toán:</label>
            <select name="method" id="method" required>
                <option value="">-- Chọn phương thức --</option>
                <option value="momo">Momo</option>
                <option value="bank">Chuyển khoản ngân hàng</option>
            </select>

            <!-- Nút tiếp tục -->
            <button type="button" class="btn continue" onclick="showQR()">➡ Tiếp tục</button>

            <!-- QR hiển thị -->
            <div id="qr-momo" class="qr-box">
                <p>Quét QR bằng Momo để thanh toán:</p>
                <img src="images/momo.png" class="qr" alt="QR Momo">
            </div>

            <div id="qr-bank" class="qr-box">
                <p>Quét QR để chuyển khoản ngân hàng:</p>
                <img src="images/vietcombank.png" class="qr" alt="QR Ngân hàng">
            </div>

            <!-- Nút xác nhận -->
            <button type="submit" class="btn pay">Xác nhận thanh toán</button>
        </form>

        <a href="detail.php?id=<?php echo $id; ?>" class="btn back">Quay lại</a>
    </div>

    <script>
    function showQR() {
        let form = document.getElementById("paymentForm");
        let fullname = form.fullname.value.trim();
        let email = form.email.value.trim();
        let phone = form.phone.value.trim();
        let method = form.method.value;

        if (fullname === "" || email === "" || phone === "" || method === "") {
            alert("Vui lòng nhập đầy đủ thông tin trước khi tiếp tục!");
            return;
        }

        // Ẩn tất cả QR
        document.querySelectorAll(".qr-box").forEach(el => el.style.display = "none");
        // Hiện QR theo phương thức
        document.getElementById("qr-" + method).style.display = "block";
        // Hiện nút xác nhận thanh toán
        document.querySelector(".btn.pay").style.display = "inline-block";
    }
    </script>
</body>

</html>