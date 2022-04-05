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
            <div class="recentOrders aboutOrders projectTable toggle_accordion1">
                <div class="cardHeader">
                    <h2 class="edit_accordion1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 13L11.2929 13.7071L12 14.4142L12.7071 13.7071L12 13ZM5.29289 7.70711L11.2929 13.7071L12.7071 12.2929L6.70711 6.29289L5.29289 7.70711ZM12.7071 13.7071L18.7071 7.70711L17.2929 6.29289L11.2929 12.2929L12.7071 13.7071Z" fill="#d69600" />
                            <path d="M17 18L7 18" stroke="#d69600" stroke-width="2" />
                        </svg>
                        Новый проект
                    </h2>
                    <input type="text" name="fun" style="width: 100%; display: none; " value="newProject">
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
                                <h4>Основное изображение проекта на главной странице<span class="necessarily"> *</span></h4>
                            </td>
                            <td width="60px">
                                <input type="file" name="newproj" id="img">
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                                    <td>Приоритет</td>
                                    <td><select name="prioritet_ru" class="select_style">
                                            <option disabled>Выберите Приоритет</option>
                                            <option value="1">Высокий</option>
                                            <option value="2">Средний</option>
                                            <option value="3">Низкий</option>
                                        </select></td>
                                </tr>
                                <tr>
                            <td>Тип направления<span class="necessarily"> *</span></td>
                            <td><select name="btn_ru" class="select_style">
                                    <option disabled>Выберите тип</option>
                                    <?php foreach ($napravlenia as $napravlen) {
                                        if ($napravlen["type_proj_or_prod"] === '2') { ?>
                                            <option value="<?php print($napravlen["Position_uslugi_site"]); ?>"><?php print($napravlen["Title_uslugi_site"]); ?></option>
                                    <?php }
                                    } ?>
                                </select></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr style="border-bottom: none;">
                            <td style="color: #959595; font-weight: 400;" colspan="3">ТЕКСТ НА РУССКОМ ЯЗЫКЕ</td>
                        </tr>
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
                            <td>Под описанием</td>
                            <td><input type="text" name="srok_ru" style="width: 100%;" value=""></td>
                            <td>RU</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr style="border-bottom: none;">
                            <td style="color: #959595; font-weight: 400;" colspan="3">ТЕКСТ НА АНГЛИЙСКОМ ЯЗЫКЕ</td>
                        </tr>
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
                            <td>Под описанием</td>
                            <td><input type="text" name="srok_en" style="width: 100%;" value=""></td>
                            <td>ENG</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr style="border-bottom: none;">
                            <td style="color: #959595; font-weight: 400;" colspan="3">ТЕКСТ НА КАЗАХСКОМ ЯЗЫКЕ</td>
                        </tr>
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
                            <td>Под описанием</td>
                            <td><input type="text" name="srok_kz" style="width: 100%;" value=""></td>
                            <td>KZ</td>
                        </tr>
                    </tbody>
                </table>
                <input type="submit" value="Сохранить" class="btn" />
            </div>
        </form>

    </div>
</div>