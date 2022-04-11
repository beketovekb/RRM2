<?php
require_once '../include/functions.php';
require_once '../include/database.php';
$pos = $_GET['pos'];
$directions = get_direction($link, $pos);
$name;
foreach ($directions as $direction) {
    if($direction['Lng_uslugi_site']==='ru')
    {
        $name = $direction['Title_uslugi_site'];
        $tp = $direction['type_proj_or_prod'];
    }
}
if(isset($_GET['save']))
{
    print "<body onload=\"savedop();\">";
}
if(isset($_GET['saveimg']))
{
    print "<body onload=\"saveimg();\">";
}
$order   = "\n";
$replace = '<br>';
?>

<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Изображение <?php print($name); ?></h2>
            </div>
            <table>
                <tr>
                    <td>
                        <h4>Изображения на главной странице</h4>
                    </td>
                    <td width="60px">
                        <form action="../include/save.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="dir">
                            <input type="text" name="pos" style="width: 100%; display:none; " value="<?php print($pos); ?>">
                            <input type="submit" value="Загрузить файл!">
                        </form>

                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Изображения на странице подробнее</h4>
                    </td>
                    <td width="60px">
                        <form action="../include/save.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="dird">
                            <input type="text" name="pos" style="width: 100%; display:none; " value="<?php print($pos); ?>">
                            <input type="submit" value="Загрузить файл!">
                        </form>

                    </td>
                </tr>
            </table>
        </div>
        <form action="../include/save.php" method="POST">
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2><?php print($name); ?></h2>
                    <input type="text" name="fun" style="width: 100%; display: none; " value="editDirection">
                    <input type="text" name="pos" style="width: 100%; display: none; " value="<?php print($pos); ?>">
                </div>
                <table>
                <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                                    <td>Тип направления</td>
                                    <td><select name="btn_ru" class="select_style">
                                            <option disabled>Выберите тип</option>
                                            <option value='1' <?php if($tp==='1') print('selected');?>>Продукты</option>
                                            <option value='2' <?php if($tp==='2') print('selected');?>>Услуги</option>
                                        </select></td>
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
                        <?php foreach ($directions as $direction) {
                            if ($direction['Lng_uslugi_site'] === 'ru') { ?>
                                <!--Russian-->
                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_ru" style="width: 100%;" value="<?php print($direction['Title_uslugi_site']); ?>"></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_ru" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $direction['Opisanie_uslugi_site'])); ?></textarea></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_ru" style="width: 100%;" value="<?php print($direction['Srok_uslugi_site']); ?>"></td>
                                    <td>RU</td>
                                </tr>
                                
                        <?php }
                        } ?>
                    </tbody>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                            <td>Язык</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($directions as $direction) {
                            if ($direction['Lng_uslugi_site'] === 'en') { ?>
                                <!--Russian-->
                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_en" style="width: 100%;" value="<?php print($direction['Title_uslugi_site']); ?>"></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_en" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $direction['Opisanie_uslugi_site'])); ?></textarea></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_en" style="width: 100%;" value="<?php print($direction['Srok_uslugi_site']); ?>"></td>
                                    <td>ENG</td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                            <td>Язык</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($directions as $direction) {
                            if ($direction['Lng_uslugi_site'] === 'kz') { ?>
                                <!--Russian-->
                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_kz" style="width: 100%;" value="<?php print($direction['Title_uslugi_site']); ?>"></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_kz" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $direction['Opisanie_uslugi_site'])); ?></textarea></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_kz" style="width: 100%;" value="<?php print($direction['Srok_uslugi_site']); ?>"></td>
                                    <td>KZ</td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
                    <input type="submit" value="Сохранить" class="btn" />
            </div>
        </form>

    </div>



</div>