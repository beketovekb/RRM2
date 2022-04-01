<?php
require_once '../include/functions.php';
require_once '../include/database.php';
$partners = get_partners($link);
$titles = get_titles_admin($link);
$ftitler;
$ftitlee;
$ftitlek;
foreach ($titles as $title) {
    switch ($title["Lng_title"]) {
        case 'ru':
            $ftitler[$title["Number"]] = $title["Text"];
            break;
        case 'en':
            $ftitlee[$title["Number"]] = $title["Text"];
            break;
        case 'kz':
            $ftitlek[$title["Number"]] = $title["Text"];
            break;
    }
}
?>
<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
        <form action="../include/save.php" method="POST">
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2>Наши партнеры</h2>
                    <input type="submit" value="Сохранить" class="btn" />
                    <input type="text" name="fun" style="width: 100%; display: none; " value="partners">
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
                            <td><input type="text" name="r12" style="width: 100%;" value="<?php print($ftitler['12']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="r13" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitler['13']); ?></textarea></td>
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
                            <td><input type="text" name="e12" style="width: 100%;" value="<?php print($ftitlee['12']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="e13" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlee['13']); ?></textarea></td>
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
                            <td><input type="text" name="k12" style="width: 100%;" value="<?php print($ftitlek['12']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="k13" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlek['13']); ?></textarea></td>
                            <td>KZ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Добавить партнера</h2>
            </div>
            <table>
                <tr>
                    <td>
                        <h4>Логотип</h4>
                    </td>
                    <td width="60px">
                        <form action="../include/save.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="newpart">
                            <input type="submit" value="Загрузить файл!">
                        </form>
                    </td>
                </tr>
            </table>
        </div>

        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Список партнеров</h2>
            </div>
            <table>
                <?php foreach ($partners as $partner) { ?>
                    <tr>
                        <td>
                            <div style="background: url(<?php print($partner['img_partners']); ?>) 100% 50% no-repeat; background-size: contain; width: 100px; height: 100px;"></div>
                        </td>
                        <td><a href="../include/delete.php?type=part&pos=<?php print($partner['id_partners']); ?>" class="btn">Удалить</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>



</div>