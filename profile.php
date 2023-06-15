<?php
session_start();

// 检查用户是否已登录
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// 获取用户信息，这里假设用户信息已存在于数据库中
$userId = $_SESSION['userId'];
$username = $_SESSION['username'];

// 在这里可以从数据库中获取其他用户信息，如电子邮件等
// 示例：假设用户电子邮件存在于数据库中，可以根据需要进行修改
$email = "user@example.com";

// 检查是否提交了修改信息的表单
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 获取表单提交的新信息
    $newEmail = $_POST['email'];

    // 在这里执行更新用户信息的逻辑，将新信息保存到数据库中

    // 示例：将新的电子邮件保存到数据库中
    // 这里只是简单示例，实际应用中可能需要进行验证、过滤和防止SQL注入等安全处理
    $email = $newEmail;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>用户信息</title>
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
    <body>
    <div class="container">
        <h2>用户信息</h2>
    <p><strong>用户名:</strong> <?php echo $username; ?></p>
    <p><strong>电子邮件:</strong> <?php echo $email; ?></p>

    <h3>修改信息</h3>
    <form action="" method="POST">
        <label for="email">新的电子邮件:</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="修改">
    </form>

    <p><a href="logout.php">退出登录</a></p>
    </div>
</body>
    
</body>
</html>
