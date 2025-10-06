<?php
// Dữ liệu 9 homestay
$rooms = [
    1 => [
        "name" => "Cá Homestay",
        "images" => "images/10.png",
        "price" => "800.000 VNĐ/đêm",
        "desc" => "Có chiếc view ngắm trọn thành phố về đêm.",
        "detail" => "Cá Homestay được xây dựng ở trên một ngọn đồi cách trung tâm thành phố nên luôn mang đến cho du khách một không gian yên tĩnh, thanh bình và tách biệt với cuộc sống nhộn nhịp. Homestay sử dụng tông màu gỗ làm chủ đạo tạo nên một cảm giác ấm áp, gần gũi. Không chỉ vậy, khi bầu trời ngả sang màu đen thì homestay nổi bật dưới ánh đèn vàng đầy sự lãng mạn. Bạn có thể ngồi thưởng thức một ly cafe nóng rồi nhìn khung cảnh qua ô cửa sổ của homestay. Một cảm giác yên bình đến lạ đấy nhé.",
        "address" => "Số 12 Đường Hùng Vương, Phường 10, TP. Đà Lạt"
    ],
    2 => [
        "name" => "Mountain Homestay",
        "images" => "images/11.png",
        "price" => "700.000 VNĐ/đêm",
        "desc" => "Không gian ấm cúng.",
        "detail" => "Homestay đơn giản kết hợp cổng homestay đẹp là một trong những lựa chọn hàng đầu cho những người yêu thích sự tinh tế và thanh lịch.",
        "address" => "Số 45 Đường Nguyễn Trung Trực, Phường 4, TP. Đà Lạt"
    ],
    3 => [
        "name" => "LengKeng Dalat Homestay",
        "images" => "images/12.png",
        "price" => "600.000 VNĐ/đêm",
        "desc" => "Bao phủ xung quanh là một vườn thông tự nhiên.",
        "detail" => "LengKeng Dalat Homestay nằm ngay trên sườn đồi thoai thoải. Không gian luôn ngập tràn tiếng sáo, tiếng chuông gió vi vu. Đặc biệt, tại đây bạn có thể chiêm ngưỡng cảnh bình minh hay hoàng hôn lãng mạn – chắc chắn sẽ không làm bạn thất vọng.",
        "address" => "Số 29A Hoàng Hoa Thám, Phường 10, TP. Đà Lạt"
    ],
    4 => [
        "name" => "Homestay The Kupid",
        "images" => "images/13.png",
        "price" => "900.000 VNĐ/đêm",
        "desc" => "Một không gian lưu trú tuyệt đẹp và lý tưởng.",
        "detail" => "Homestay với thiết kế hiện đại, tinh tế nhưng vẫn hài hòa cùng thiên nhiên. Các phòng tại The Kupid có những ô cửa kính lớn, giúp bạn tận hưởng ánh sáng tự nhiên và cảnh quan xanh mát. Mỗi góc homestay đều toát lên sự nhẹ nhàng, mang đến cảm giác thư giãn tuyệt đối.",
        "address" => "Số 47 Đặng Thái Thân, Phường 3, TP. Đà Lạt"
    ],
    5 => [
        "name" => "Homestay Bình Yên House Đà Lạt",
        "images" => "images/14.png",
        "price" => "500.000 VNĐ/đêm",
        "desc" => "Trải nghiệm săn mây và ngắm bình minh.",
        "detail" => "Đúng như tên gọi, Homestay Bình Yên House mang đến một không gian thật yên bình. Bao quanh là đồi núi và mây bay, nơi đây cung cấp những căn phòng gỗ nhỏ xinh, mái lá cọ mang nét mộc mạc giản dị, rất được lòng du khách yêu thiên nhiên.",
        "address" => "Số 6 Hẻm 3 Bis Lê Thị Hồng Gấm, Phường 1, TP. Đà Lạt"
    ],
    6 => [
        "name" => "Homestay Lalaland",
        "images" => "images/15.png",
        "price" => "1.200.000 VNĐ/đêm",
        "desc" => "Không gian trẻ trung và sáng tạo đầy tinh tế.",
        "detail" => "Lalaland Homestay là điểm đến nghỉ dưỡng lý tưởng, cách chợ Đà Lạt 5 phút đi xe. Cung cấp phòng nghỉ tiện nghi, không gian thoáng mát, kết hợp quán cà phê, nhà hàng và khu spa mini. Lalaland là lựa chọn tuyệt vời để thư giãn và tận hưởng kỳ nghỉ đáng nhớ.",
        "address" => "Số 10A Triệu Việt Vương, Phường 4, TP. Đà Lạt"
    ],
    7 => [
        "name" => "Homestay Windy Hill Đà Lạt",
        "images" => "images/16.png",
        "price" => "650.000 VNĐ/đêm",
        "desc" => "Ngắm hoàng hôn và bình minh tuyệt đẹp.",
        "detail" => "Windy Hill mang đến những căn phòng gỗ Bungalow thoáng mát, view rừng thông. Không gian yên tĩnh, hòa hợp với thiên nhiên, rất phù hợp để nghỉ dưỡng hoặc làm việc từ xa.",
        "address" => "Số 106 Hùng Vương, Phường 11, TP. Đà Lạt"
    ],
    8 => [
        "name" => "Homestay Légume Đà Lạt",
        "images" => "images/17.png",
        "price" => "850.000 VNĐ/đêm",
        "desc" => "Thiết kế hiện đại, phá cách nhưng gần gũi.",
        "detail" => "Légume gây ấn tượng với các căn bungalow hình khối độc đáo, lấy cảm hứng từ nghệ thuật hình học. Không gian ấm cúng, tiện nghi, và có khu vườn hoa cực kỳ đẹp để check-in sống ảo.",
        "address" => "Số 12A Bùi Thị Xuân, Phường 2, TP. Đà Lạt"
    ],
    9 => [
        "name" => "In The Pines Homestay",
        "images" => "images/18.png",
        "price" => "1.500.000 VNĐ/đêm",
        "desc" => "In The Pines mang đậm nét hoài cổ, hòa quyện cùng rừng thông.",
        "detail" => "In The Pines Homestay được thiết kế theo phong cách nhà gỗ Bắc Âu, bao quanh là rừng thông xanh mướt. Không gian yên tĩnh, trong lành, giúp bạn quên đi mọi mệt mỏi để tận hưởng những phút giây an nhiên nhất.",
        "address" => "Số 86 Xô Viết Nghệ Tĩnh, Phường 7, TP. Đà Lạt"
    ]
];

// Lấy id phòng từ URL
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
    <title><?php echo $room['name']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Chi tiết phòng bên méo meo</h2>
    </header>
    <div class="detail-container">
        <img src="<?php echo $room['images']; ?>" alt="<?php echo $room['name']; ?>">
        <h1><?php echo $room['name']; ?></h1>
        <p class="price"><?php echo $room['price']; ?></p>
        <p><strong>Mô tả ngắn:</strong> <?php echo $room['desc']; ?></p>
        <p><strong>Chi tiết:</strong> <?php echo $room['detail']; ?></p>

        <a href="index.php" class="btn">⬅ Quay lại danh sách Homestay của méo meo </a>
        <a href="payment.php?id=<?php echo $id; ?>" class="btn pay">Đặt Phòng</a>
    </div>
</body>

</html>