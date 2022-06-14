<?php
require_once('mvc/core/Helper.php');
$user = getUserToken();
if ($user != null) {
    if ($user["role_id"] == 1) {
        header('Location: http://localhost/BKPhone/Home');
    } else {
        header('Location: http://localhost/BKPhone/admin');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php define('SCRIPT_ROOT', 'http://localhost/BKPhone'); ?>
    <link rel="stylesheet" href="<?php echo SCRIPT_ROOT . '/public/css/login.css'; ?>">
</head>

<body>
    <div class="logo" style="margin-top: 10rem;">
        <img src="<?php echo SCRIPT_ROOT . '/public/images/logo.png'; ?>" alt="">
    </div>
    <form action="<?php echo SCRIPT_ROOT . '/Login/PostLogin'; ?>" method="POST">
        <h1>Login</h1>
        <label for="email">Tài khoản:</label>
        <input type="text" required name="email" id="email">

        <label for="password">Mật khẩu:</label>
        <input type="password" required name="password" id="password">
        <div class="sign">
            <button name="btnLogin" type="submit">Đăng nhập</button>
        </div>
        <a href="http://localhost/BKPhone/Register">Đăng ký tài khoản</a><br>
        <a href="http://localhost/BKPhone/Home">Trang chủ</a>
    </form>
</body>

</html>