<?php
// Chương trình PHP đơn giản
// Mở trình duyệt: http://localhost:8000

// Thiết lập múi giờ
@date_default_timezone_set('Asia/Ho_Chi_Minh');

// In ra thông báo chào mừng
echo "<h1>Xin chào!</h1>";

// In ra ngày giờ hiện tại
echo "<p>Bây giờ là: " . date('H:i:s d/m/Y') . "</p>";

// In ra một số phép tính đơn giản
$a = 5;
$b = 3;
$tong = $a + $b;

echo "<p>$a + $b = $tong</p>";
?>
