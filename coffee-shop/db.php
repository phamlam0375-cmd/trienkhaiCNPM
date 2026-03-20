<?php
$conn = new mysqli("sql207.infinityfree.com", "if0_41379868", "zwv6YBK6Glelx", "if0_41379868_coffee");

if ($conn->connect_error) {
    die("DB lỗi: " . $conn->connect_error);
}

session_start();?>