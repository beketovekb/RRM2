<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link type="image/x-icon" rel="shortcut icon" href="img/favicon.ico">
    <title>Регистрация</title>
</head>
<body>
    <div class="admin_login">
        <div class="admin_login_window">
            <img src="img/logo.png" alt="">
            <h2>REGULUS ROBOTICS MACHINE</h2>
            <hr>
            <span>Регистрация администратора</span>
            <form action="check.php" method="post">
                <div class="login_input">
                    <input type="text" name="login" class="form-control" id="login" placeholder="Логин">
                </div>
                <div class="login_input">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Имя">
                </div>
                <div class="login_input">
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль">
                </div>
                <input class="submit-btn" type="submit" value="Войти">
            </form>
        </div>
    </div>
</body>
</html>
