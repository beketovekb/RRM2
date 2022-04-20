<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link type="image/x-icon" rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="assets/modAlert.css">
    <title>Document</title>
</head>
<body>
    <div class="admin_login">
        <div class="admin_login_window">
            <img src="img/logo.png" alt="">
            <h2>REGULUS ROBOTICS MACHINE</h2>
            <hr>
            <span>Авторизация администратора</span>
            <form action="authAdmin.php" method="post">
                <div class="login_input">
                    <input type="text" name="login" class="form-control" id="login" placeholder="Логин">
                </div>
                <div class="login_input">
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль">
                </div>
                <input class="submit-btn" type="submit" value="Войти">
                <a href="" class="rememberPass">Забыли пароль?</a>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="assets/modAlert.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="scrip.js"></script>
    <script>
        function erroruser()
        {
            ModAlert.addAlert({
                type: 'error',
                text: 'Такой пользователь не найден или вы не админ',
            });
        }
        </script>
        <?php
    if(isset($_GET['stat']) and $_GET['stat']=='erroruser')
    {
        echo('<script>erroruser();</script>');
    }
    ?>

</body>
</html>