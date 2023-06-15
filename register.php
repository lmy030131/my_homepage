<!DOCTYPE html>
<html>
<head>
    <title>注册页面</title>
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
       <h2>注册</h2>
    <form action="register_process.php" method="POST">
        <input type="text" name="username" placeholder="用户名" required><br>
        <input type="password" name="password" placeholder="密码" required><br>
        <input type="submit" value="注册">
    </form>
    
    <p>已经有账户？<a href="login.php">立即登录</a></p>
    </div>
</body>
    
</body>
</html>
