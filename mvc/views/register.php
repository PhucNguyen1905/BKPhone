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
    <title>Đăng ký</title>
    <?php define('SCRIPT_ROOT', 'http://localhost/BKPhone'); ?>
    <link rel="stylesheet" href="<?php echo SCRIPT_ROOT . '/public/css/login.css'; ?>">
</head>

<body>
    <div class="logo" style="margin-top: 10rem;">
        <img src="<?php echo SCRIPT_ROOT . '/public/images/logo.png'; ?>" alt="">
    </div>

    <form action="<?php echo SCRIPT_ROOT . '/Register/PostRegister'; ?>" method="POST">
        <h1>Đăng ký</h1>
        <div class="line">
            <label for="">Tên:</label>
            <input type="text" name="fullname" required id="fullname" placeholder="Họ và tên">
        </div>
        <div class="line">
            <label for="phone">SĐT:</label>
            <input class="bigInput" type="text" required name="phone" id="phone" placeholder="Số điện thoại">
        </div>
        <div class="line">
            <label for="address">Địa chỉ:</label>
            <input class="bigInput" type="text" required id="address" name="address" placeholder="Địa chỉ giao hàng">
        </div>
        <br>
        <div class="line">
            <label for="email">Email:</label>
            <input class="bigInput " type="text" required id="email" name="email" placeholder="Tên đăng nhập">
        </div>
        <div class="line">
            <label for="password">Mật khẩu:</label>
            <input class="bigInput " type="password" required name="password" placeholder="Mật khẩu">
        </div>

        <div class="sign">
            <button name="btnRegister" type="submit">Đăng ký</button>
        </div>
        <a href="http://localhost/BKPhone/Home">Trang chủ</a>
    </form>

</body>

</html>