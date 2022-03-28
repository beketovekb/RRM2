<?php
require_once '../include/functions.php';
require_once '../include/database.php';
$pos = $_GET['pos'];
$directions = get_direction($link,$pos);
$name;
foreach($directions as $direction){$name = $direction['Title_uslugi_site'];}
?>

<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
    <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Изображение <?php print($name);?></h2>
            </div>
            <table>
                <tr>
                <td>
                        <h4>Изображения на главной странице</h4>
                    </td>
                    <td width="60px">
                        <form action="../include/save.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="dir">
                            <input type="text" name="pos" style="width: 100%; display:none; " value="<?php print($pos);?>">
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
                            <input type="text" name="pos" style="width: 100%; display:none; " value="<?php print($pos);?>">
                            <input type="submit" value="Загрузить файл!">
                        </form>

                    </td>
                </tr>
            </table>
        </div>
        <form action="../include/save.php" method="POST">
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2><?php print($name);?></h2>
                    <input type="submit" value="Сохранить" class="btn" />
                    <input type="text" name="fun" style="width: 100%; display: none; " value="about">
                </div>
                <table>
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
                            <td>Заголовок</td>
                            <td><input type="text" name="r4" style="width: 100%;" value="<?php print($ftitler['4']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="r5" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitler['5']); ?></textarea></td>
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
                        <!--Englis-->
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="e4" style="width: 100%;" value="<?php print($ftitlee['4']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="e5" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlee['5']); ?></textarea></td>
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
                        <!-- Kazakh-->
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="k4" style="width: 100%;" value="<?php print($ftitlek['4']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="k5" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlek['5']); ?></textarea></td>
                            <td>KZ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
        
    </div>



</div>