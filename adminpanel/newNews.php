<?php
require_once '../include/functions.php';
require_once '../include/database.php';

$napravlenia = get_napravlenia($link, 'ru');
$title_ru;
foreach ($napravlenia as $napravlen) {
    $title_ru[$napravlen["Position_uslugi_site"]] = $napravlen["Title_uslugi_site"];
}
?>
<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
        <form action="../include/save.php" method="POST" enctype="multipart/form-data">
            <div class="recentOrders aboutOrders listTable toggle_accordion1">
                <div class="cardHeader">
                    <h2 class="edit_accordion1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 13L11.2929 13.7071L12 14.4142L12.7071 13.7071L12 13ZM5.29289 7.70711L11.2929 13.7071L12.7071 12.2929L6.70711 6.29289L5.29289 7.70711ZM12.7071 13.7071L18.7071 7.70711L17.2929 6.29289L11.2929 12.2929L12.7071 13.7071Z" fill="#d69600" />
                            <path d="M17 18L7 18" stroke="#d69600" stroke-width="2" />
                        </svg>
                        Добавить новость
                    </h2>
                    <input type="text" name="fun" style="width: 100%; display: none; " value="newNews">
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Файл</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>Изображения на главной странице<span class="necessarily"> *</span></h4>
                            </td>
                            <td width="60px">
                                <input type="file" name="newnews" id="img">
                            </td>
                        </tr>
                        <tr>
                            <td>Дата публикации<span class="necessarily"> *</span></td>
                            <td><input type="datetime-local" id="localdate" name="date" /> </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                            <td>Язык</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Russian-->
                        <tr>
                            <td>Заголовок<span class="necessarily"> *</span></td>
                            <td><input type="text" name="title_ru" style="width: 100%;" value=""></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание<span class="necessarily"> *</span></td>
                            <td><textarea name="opisanie_ru" id="" style="width: 100%;" cols="40" rows="10"></textarea></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Направление<span class="necessarily"> *</span></td>
                            <td><input type="text" name="napravlenia_ru" style="width: 100%;" value=""></td>
                            <td>RU</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                            <td>Язык</td>
                        </tr>
                    </thead>
                    <tbody>

                        <!--English-->
                        <tr>
                            <td>Заголовок<span class="necessarily"> *</span></td>
                            <td><input type="text" name="title_en" style="width: 100%;" value=""></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание<span class="necessarily"> *</span></td>
                            <td><textarea name="opisanie_en" id="" style="width: 100%;" cols="40" rows="10"></textarea></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Направление<span class="necessarily"> *</span></td>
                            <td><input type="text" name="napravlenia_en" style="width: 100%;" value=""></td>
                            <td>ENG</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                            <td>Язык</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Kazakh-->
                        <tr>
                            <td>Заголовок<span class="necessarily"> *</span></td>
                            <td><input type="text" name="title_kz" style="width: 100%;" value=""></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание<span class="necessarily"> *</span></td>
                            <td><textarea name="opisanie_kz" id="" style="width: 100%;" cols="40" rows="10"></textarea></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Направление<span class="necessarily"> *</span></td>
                            <td><input type="text" name="napravlenia_kz" style="width: 100%;" value=""></td>
                            <td>KZ</td>
                        </tr>
                    </tbody>
                </table>
                    <input type="submit" value="Сохранить" class="btn" />
            </div>
        </form>

    </div>
</div>