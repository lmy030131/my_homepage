<?php
require_once 'db_connection.php';

// 获取表单提交的用户名
$username = $_POST['username'];

// 在数据库中查找用户信息
$query = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // 找到用户，可以进行重置密码的操作
    // 在此示例中，可以生成一个随机密码并更新到数据库中，然后发送给用户
    $newPassword = generateRandomPassword();
    $hashedPassword = md5($newPassword);

    $updateQuery = "UPDATE users SET password='$hashedPassword' WHERE username='$username'";
    $updateResult = $conn->query($updateQuery);

    if ($updateResult === TRUE) {
        // 发送包含新密码的电子邮件或其他通知给用户
        // 这里只是简单地输出新密码
        $message = '新密码：' . $newPassword;
    } else {
        $message = '密码重置失败';
    }
} else {
    // 用户不存在
    $message = '用户不存在';
}

$conn->close();

function generateRandomPassword()
{
    // 生成一个包含字母和数字的随机密码
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    $length = 8;

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }

    return $password;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>重置密码</title>
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

    .message {
        text-align: center;
        margin-top: 20px;
        font-weight: bold;
    }

    .return-link {
        text-align: center;
        margin-top: 20px;
    }

    .return-link a {
        text-decoration: none;
        color: #4caf50;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>重置密码</h2>

        <div class="message">
            <?php echo $message; ?>
        </div>

        <div class="return-link">
            <a href="login.php">返回登录</a>
        </div>
    </div>
</body>
</html>
