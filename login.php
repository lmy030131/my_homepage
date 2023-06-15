<?php
session_start();

// 检查用户是否已登录
if (isset($_SESSION['username'])) {
    header("Location: profile.php");
    exit();
}

// 处理登录逻辑
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 获取表单提交的用户名和密码
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 在这里执行验证逻辑，比较用户名和密码是否正确

    // 示例：假设用户名和密码是正确的，将用户信息存储在会话中
    $_SESSION['username'] = $username;
    $_SESSION['userId'] = 123; // 假设用户ID

    // 重定向到用户信息页面
    header("Location: profile.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>登录页面</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        width: 50%;
        padding: 20px;
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    h2 {
        text-align: center;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    p {
        text-align: center;
        margin-top: 10px;
    }

    .links {
        text-align: center;
        margin-top: 20px;
    }

    .links a {
        margin: 0 10px;
        text-decoration: none;
        color: #4caf50;
    }

    .links a:hover {
        text-decoration: underline;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>登录</h2>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="用户名" required><br>
            <input type="password" name="password" placeholder="密码" required><br>
            <input type="submit" value="登录">
        </form>

        <div class="links">
            <a href="register.php">注册</a>
            <a href="forgot_password.php">忘记密码</a>
        </div>
    </div>
</body>
</html>