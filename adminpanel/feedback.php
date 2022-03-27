<?php
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
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>О нас</h2>
                    <input type="submit" value="Save" class="btn" />
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
                            <td><input type="text" name="r4" style="width: 100%;" value="<?php print($ftitler['6']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="r5" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitler['7']); ?></textarea></td>
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
                            <td><input type="text" name="e4" style="width: 100%;" value="<?php print($ftitlee['6']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="e5" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlee['7']); ?></textarea></td>
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
                            <td><input type="text" name="k4" style="width: 100%;" value="<?php print($ftitlek['6']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="k5" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlek['7']); ?></textarea></td>
                            <td>KZ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Изображение</h2>
            </div>
            <table>
                <tr>
                <td>
                        <h4>Задний фон <br> <span>Обратная связь</span></h4>
                    </td>
                    <td width="60px">
                        <form action="../include/save.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="fed">
                            <input type="submit" value="Загрузить файл!">
                        </form>

                    </td>
                </tr>
            </table>
        </div>
    </div>



</div>