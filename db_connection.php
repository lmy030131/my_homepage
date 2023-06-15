<?php
$host = 'localhost';
$username = 'html';
$password = '123456';
$database = 'html';

// 创建连接
$conn = new mysqli($host, $username, $password, $database);

// 检查连接是否成功
if ($conn->connect_error) {
    die('数据库连接失败：' . $conn->connect_error);
}
?>