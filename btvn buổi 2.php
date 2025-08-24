<?php
// Chuỗi gốc
$str = "Xin chào các bạn";

// Chuỗi con cần kiểm tra
$prefix = "Xin";

// Dùng strncmp để so sánh phần đầu
if (strncmp($str, $prefix, strlen($prefix)) === 0) {
    echo "Chuỗi bắt đầu bằng '$prefix'";
} else {
    echo "Chuỗi KHÔNG bắt đầu bằng '$prefix'";
}
?>