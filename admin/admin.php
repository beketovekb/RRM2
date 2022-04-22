<?php
if($_COOKIE['user']=='')
{
    header('Location: login.php');
}
require_once '../include/database.php';
require_once '../include/functions.php';
$lst;
if (isset($_GET['str'])) {
    $lst = '../adminpanel/' . $_GET['str'] . '.php';
}
$par='';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin RRM</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="assets/modAlert.css">
    <link type="image/x-icon" rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="img/logo_icon.png" alt="">
                        </span>
                        <span class="title">Панель администратора</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="/admin/admin.php?str=main">
                        <span class="icon">
                            <ion-icon name="stats-chart-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li> -->
                <li>
                    <a href="/admin/admin.php?str=general">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Главный блок</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin.php?str=menusite">
                        <span class="icon">
                            <ion-icon name="reorder-four-outline"></ion-icon>
                        </span>
                        <span class="title">Меню</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin.php?str=about">
                        <span class="icon">
                            <ion-icon name="storefront-outline"></ion-icon>
                        </span>
                        <span class="title">О нас</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin.php?str=feedback">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="title">Обратная связь</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin.php?str=compitions">
                        <span class="icon">
                        <ion-icon name="desktop-outline"></ion-icon>
                        </span>
                        <span class="title">Компетенции</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin.php?str=directions">
                        <span class="icon">
                            <ion-icon name="library-outline"></ion-icon>
                        </span>
                        <span class="title">Направления</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin.php?str=newProject">
                        <span class="icon">
                            <ion-icon name="add-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Добавить новый проект</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin.php?str=spisokProject">
                        <span class="icon">
                            <ion-icon name="albums-outline"></ion-icon>
                        </span>
                        <span class="title">Список проектов</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin.php?str=new_product">
                        <span class="icon">
                        <ion-icon name="logo-reddit"></ion-icon>
                        </span>
                        <span class="title">Добавить новый продукт</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin.php?str=list_product">
                        <span class="icon">
                        <ion-icon name="logo-stackoverflow"></ion-icon>
                        </span>
                        <span class="title">Список продуктов</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin.php?str=listpartner">
                        <span class="icon">
                            <ion-icon name="earth-outline"></ion-icon>
                        </span>
                        <span class="title">Партнеры</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="/admin/admin.php?str=newNews">
                        <span class="icon"><ion-icon name="duplicate-outline"></ion-icon></span>
                        <span class="title">Добавить новости</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin.php?str=listNews">
                        <span class="icon">
                            <ion-icon name="file-tray-stacked-outline"></ion-icon>
                        </span>
                        <span class="title">Список новостей</span>
                    </a>
                </li> -->
                <li>
                    <a href="/admin/admin.php?str=footer">
                        <span class="icon">
                            <ion-icon name="at-outline"></ion-icon>
                        </span>
                        <span class="title">Контакты</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/regist.php">
                        <span class="icon">
                        <ion-icon name="person-add-outline"></ion-icon>
                        </span>
                        <span class="title">Добавить нового админа</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/exit.php">
                        <span class="icon">
                            <ion-icon name="exit-outline"></ion-icon>
                        </span>
                        <span class="title">Выход</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <!--main-->
        <?php if ($lst !== null) include $lst; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="assets/modAlert.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="scrip.js"></script>
    <script>
        //MenuToggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function() {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
        //add hovered class in selected list item
        let list = document.querySelectorAll('.navigation li');

        function activeLink() {
            list.forEach((item) => item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) => item.addEventListener('mouseover', activeLink));
        $(function() {
            $('.edit_accordion1').click(function() {
                $('.toggle_accordion1').toggleClass('accordion');
            });
            $('.edit_accordion2').click(function() {
                $('.toggle_accordion2').toggleClass('accordion');
            });
        });

        function savedop()
    {
        ModAlert.addAlert({
	type: 'success',
	text: 'Изменения сохранены',
    });
    }

    function saveimg()
    {
        ModAlert.addAlert({
	type: 'success',
	text: 'Изображения изменены',
    });
    }
    </script>


</body>

</html>