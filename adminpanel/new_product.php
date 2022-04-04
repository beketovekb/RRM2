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
            <div class="recentOrders aboutOrders projectTable">
                <div class="cardHeader">
                    <h2>Новый продукт</h2>
                    <input type="submit" value="Сохранить" class="btn" />
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
                        <h4>Изображения на главной странице<span class="necessarily"> *</span></h4>
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
                            <td>Язык</td>
                        </tr>
                    </thead>
                    <tbody>
                                <!--Russian-->
                                <tr>
                                    <td>Приоритет<span class="necessarily"> *</span></td>
                                    <td><input type="text" name="prioritet_ru" style="width: 100%;" value=""></td>
                                    <td>RU</td>
                                </tr>
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
                                <tr>
                                    <td>Цена</td>
                                    <td><input type="text" name="cena_ru" style="width: 100%;" value=""></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Ссылка<span class="necessarily"> *</span></td>
                                    <td><input type="text" name="url_ru" style="width: 100%;" value=""></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Тип направления<span class="necessarily"> *</span></td>
                                    <td><select name="btn_ru">
                                            <option disabled>Выберите тип</option>
                                            <?php foreach ($napravlenia as $napravlen) { if($napravlen["type_proj_or_prod"]==='1'){ ?>
                                                
                                                <option value="<?php print($napravlen["Position_uslugi_site"]);?>"><?php print($napravlen["Title_uslugi_site"]); ?></option>
                                            <?php }}?>
                                        </select></td>
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
                                    <td>Приоритет<span class="necessarily"> *</span></td>
                                    <td><input type="text" name="prioritet_en" style="width: 100%;" value=""></td>
                                    <td>ENG</td>
                                </tr>
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
                                <tr>
                                    <td>Тип направления<span class="necessarily"> *</span></td>
                                    <td><select name="btn_en">
                                            <option disabled>Выберите тип</option>
                                            <?php foreach ($napravlenia as $napravlen) {?>
                                                <option value="<?php print($napravlen["Position_uslugi_site"]);?>"><?php print($napravlen["Title_uslugi_site"]); ?></option>
                                            <?php }?>
                                        </select></td>
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
                                    <td>Приоритет<span class="necessarily"> *</span></td>
                                    <td><input type="text" name="prioritet_kz" style="width: 100%;" value=""></td>
                                    <td>KZ</td>
                                </tr>
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
                                <tr>
                                    <td>Тип направления<span class="necessarily"> *</span></td>
                                    <td><select name="btn_kz">
                                            <option disabled>Выберите тип</option>
                                            <?php foreach ($napravlenia as $napravlen) {?>
                                                <option value="<?php print($napravlen["Position_uslugi_site"]);?>"><?php print($napravlen["Title_uslugi_site"]); ?></option>
                                            <?php }?>
                                        </select></td>
                                    <td>KZ</td>
                                </tr>
                    </tbody>
                </table>
            </div>
        </form>

    </div>
</div>