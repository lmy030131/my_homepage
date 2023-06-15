<?php
require_once 'db_connection.php';

// 获取表单提交的用户名和密码
$username = $_POST['username'];
$password = $_POST['password'];

// 在数据库中插入新用户
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$result = $conn->query($query);

if ($result === TRUE) {
    // 注册成功，可以进行其他操作，如跳转到登录页面
    header("Location: login.php");
} else {
    // 注册失败，返回注册页面
    header("Location: register.php");
}

$conn->close();
?>