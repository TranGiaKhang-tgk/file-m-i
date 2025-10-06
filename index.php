<?php 
// Thông tin 9 homestay
$rooms = [
    1 => [
        "name" => "Cá Homestay",
        "images" => "1.png",
        "price" => "800.000 VNĐ/đêm",
        "desc" => "Cá Homestay được xây dựng trên một ngọn đồi xa trung tâm thành phố nên luôn mang đến cho du khách một không gian yên tĩnh, thanh bình, tách biệt với cuộc sống nhộn nhịp. Homestay có tông màu gỗ làm chủ đạo, tạo cảm giác ấm cúng, thân mật.",
        "address" => "Số 12 Đường Hùng Vương, Phường 10, TP. Đà Lạt"
    
    ],
    2 => [
        "name" => "Mountain Homestay",
        "images" => "2.png",
        "price" => "700.000 VNĐ/đêm",
        "desc" => "Mang lại cho thực khách cảm giác ấm cúng và gần gũi.",
        "address" => "Số 45 Đường Nguyễn Trung Trực, Phường 4, TP. Đà Lạt"
    ],
    3 => [
        "name" => "LengKeng Dalat Homestay",
        "images" => "3.png",
        "price" => "600.000 VNĐ/đêm",
        "desc" => "Nơi đây nhất định phải là lựa chọn cho những tâm hồn muốn tìm về sự bình yên, trị liệu thân tâm, phục hồi năng lượng và lan tỏa tình yêu thương.",
        "address" => "Số 29A Hoàng Hoa Thám, Phường 10, TP. Đà Lạt"
    ],
    4 => [
        "name" => "Homestay The Kupid",
        "images" => "4.png",
        "price" => "900.000 VNĐ/đêm",
        "desc" => "The Kupid là một homestay Đà Lạt với phong cách lãng mạn, gần gũi thiên nhiên, là điểm đến lý tưởng cho các cặp đôi và gia đình muốn “rủ nhau đi trốn”. Tọa lạc giữa rừng thông bạt ngàn, The Kupid mang đến không gian yên bình, view đẹp tuyệt vời và những tiện ích hiện đại.",
        "address" => "Số 47 Đặng Thái Thân, Phường 3, TP. Đà Lạt"
    ],
    5 => [
        "name" => "Homestay Bình Yên House Đà Lạt",
        "images" => "5.png",
        "price" => "500.000 VNĐ/đêm",
        "desc" => "Homestay Bình Yên House đứng đầu danh sách những homestay du khách nên lựa chọn để tận hưởng trải nghiệm săn mây, ngắm bình minh và check-in sống ảo cực xịn.",
        "address" => "Số 6 Hẻm 3 Bis Lê Thị Hồng Gấm, Phường 1, TP. Đà Lạt"
    ],
    6 => [
        "name" => "Homestay Lalaland",
        "images" => "6.png",
        "price" => "1.200.000 VNĐ/đêm",
        "desc" => "Lalaland homestay là thiên đường dành cho những kẻ mộng mơ khi đến Đà Lạt, mang phong cách thiết kế độc đáo và không gian tràn đầy nghệ thuật.",
        "address" => "Số 10A Triệu Việt Vương, Phường 4, TP. Đà Lạt"
    ],
    7 => [
        "name" => "Homestay Windy Hill Đà Lạt",
        "images" => "7.png",
        "price" => "650.000 VNĐ/đêm",
        "desc" => "Windy Hill là homestay kết hợp quán cafe cực chill, mang lại trải nghiệm gần gũi với thiên nhiên, không gian thoáng đãng và view đẹp.",
        "address" => "Số 106 Hùng Vương, Phường 11, TP. Đà Lạt"
    ],
    8 => [
        "name" => "Homestay Légume Đà Lạt",
        "images" => "8.png",
        "price" => "850.000 VNĐ/đêm",
        "desc" => "Legume Homestay nổi bật với phong cách kiến trúc container nhiều màu sắc, mang đến trải nghiệm nghỉ dưỡng độc đáo và trẻ trung.",
        "address" => "Số 12A Bùi Thị Xuân, Phường 2, TP. Đà Lạt"
    ],
    9 => [
        "name" => "In The Pines Homestay",
        "images" => "9.png",
        "price" => "1.500.000 VNĐ/đêm",
        "desc" => "In The Pines Homestay mang phong cách nhà gỗ Bắc Âu, là nơi lý tưởng để nghỉ ngơi giữa rừng thông xanh mướt và không khí trong lành.",
        "address" => "Số 86 Xô Viết Nghệ Tĩnh, Phường 7, TP. Đà Lạt"
    ]
];
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Homestay Méo Meo</title>
    <link rel="stylesheet" href="style.css">
</head>
<footer>
    <h2>📞 Liên hệ Homestay Méo Meo</h2>
    <p>Hotline: <a href="tel:0856758687">0856758687</a></p>
    <p>Email: <a href="mail:trangiakhangcamlam@gmail.com">trangiakhangcamlam@gmail.com</a></p>
</footer>


<body>
    <header>
        <h1>🏡 Homestay Méo Meo</h1>
    </header>

    <!-- Giới thiệu -->
    <section class="intro">
        <h2>Giới thiệu về Homestay Đà Lạt</h2>
        <p>
            🌸 <strong>Đà Lạt</strong> thành phố ngàn hoa, nơi sương mờ giăng lối và không khí mát lạnh quanh năm
            luôn là điểm dừng chân lý tưởng cho những ai muốn tìm lại sự bình yên giữa thiên nhiên xanh mát.
            Homestay Méo Meo mang đến cho bạn không gian nghỉ dưỡng ấm cúng, gần gũi và tràn đầy cảm hứng.
            Mỗi căn homestay đều mang phong cách riêng từ hiện đại tinh tế, cổ điển sang trọng cho đến mộc mạc giản
            dị.
            Hãy để Méo Meo đồng hành cùng bạn tạo nên những kỷ niệm đáng nhớ giữa lòng Đà Lạt mộng mơ.
        </p>
    </section>

    <div class="container grid">
        <?php foreach ($rooms as $id => $room): ?>
        <div class="room">
            <a href="detail.php?id=<?php echo $id; ?>">
                <img src="images/<?php echo $room['images']; ?>" alt="<?php echo $room['name']; ?>">
            </a>
            <div class="info">
                <h3><?php echo $room['name']; ?></h3>
                <p class="price">💰 <?php echo $room['price']; ?></p>
                <p class="address"> <?php echo $room['address']; ?></p>
                <p><?php echo $room['desc']; ?></p>
                <a class="btn" href="detail.php?id=<?php echo $id; ?>">Xem chi tiết</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>

</html>