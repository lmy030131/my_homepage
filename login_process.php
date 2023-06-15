<?php
require_once 'db_connection.php';
session_start();

// 获取表单提交的用户名和密码
$username = $_POST['username'];
$password = $_POST['password'];

// 在数据库中验证用户名和密码
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // 登录成功，将用户信息存储在 session 中
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
} else {
    // 登录失败，返回登录页面
    header("Location: login.php");
}

$conn->close();
?>