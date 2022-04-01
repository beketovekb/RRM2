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
            <div class="recentOrders toggle_accordion1 accordion">
                <div class="cardHeader">
                    <h2 class="edit_accordion1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 13L11.2929 13.7071L12 14.4142L12.7071 13.7071L12 13ZM5.29289 7.70711L11.2929 13.7071L12.7071 12.2929L6.70711 6.29289L5.29289 7.70711ZM12.7071 13.7071L18.7071 7.70711L17.2929 6.29289L11.2929 12.2929L12.7071 13.7071Z" fill="#d69600" />
                            <path d="M17 18L7 18" stroke="#d69600" stroke-width="2" />
                        </svg>
                        Главный блок
                    </h2>
                    <input type="text" name="fun" style="width: 100%; display: none; " value="general">
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
                            <td>Верх</td>
                            <td><input type="text" name="r1" style="width: 100%;" value="<?php print($ftitler['1']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Серидина</td>
                            <td><input type="text" name="r2" style="width: 100%;" value="<?php print($ftitler['2']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Низ</td>
                            <td><input type="text" name="r3" style="width: 100%;" value="<?php print($ftitler['3']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Кнопка 1</td>
                            <td><input type="text" name="r4" style="width: 100%;" value="<?php print($ftitler['30']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Кнопка 2</td>
                            <td><input type="text" name="r5" style="width: 100%;" value="<?php print($ftitler['23']); ?>"></td>
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
                            <td>Верх</td>
                            <td><input type="text" name="e1" style="width: 100%;" value="<?php print($ftitlee['1']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Серидина</td>
                            <td><input type="text" name="e2" style="width: 100%;" value="<?php print($ftitlee['2']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Низ</td>
                            <td><input type="text" name="e3" style="width: 100%;" value="<?php print($ftitlee['3']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Кнопка 1</td>
                            <td><input type="text" name="e4" style="width: 100%;" value="<?php print($ftitlee['30']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Кнопка 2</td>
                            <td><input type="text" name="e5" style="width: 100%;" value="<?php print($ftitlee['23']); ?>"></td>
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
                            <td>Верх</td>
                            <td><input type="text" name="k1" style="width: 100%;" value="<?php print($ftitlek['1']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Серидина</td>
                            <td><input type="text" name="k2" style="width: 100%;" value="<?php print($ftitlek['2']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Низ</td>
                            <td><input type="text" name="k3" style="width: 100%;" value="<?php print($ftitlek['3']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Кнопка 1</td>
                            <td><input type="text" name="k4" style="width: 100%;" value="<?php print($ftitlek['30']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Кнопка 2</td>
                            <td><input type="text" name="k5" style="width: 100%;" value="<?php print($ftitlek['23']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                    </tbody>
                </table>
                <input type="submit" value="Сохранить" class="btn" />
            </div>
        </form>
        <div class="recentCustomers toggle_accordion2 accordion">
            <div class="cardHeader">
                <h2 class="edit_accordion2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 13L11.2929 13.7071L12 14.4142L12.7071 13.7071L12 13ZM5.29289 7.70711L11.2929 13.7071L12.7071 12.2929L6.70711 6.29289L5.29289 7.70711ZM12.7071 13.7071L18.7071 7.70711L17.2929 6.29289L11.2929 12.2929L12.7071 13.7071Z" fill="#d69600" />
                        <path d="M17 18L7 18" stroke="#d69600" stroke-width="2" />
                    </svg>
                    Фоновые изображения
                </h2>
            </div>

            <table>
                <tr>
                    <td>

                        <h4>Главное изображение</h4>
                    </td>
                    <td>
                        <form action="../include/save.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="gene">
                            <input type="submit" value="Загрузить файл!">
                        </form>

                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Левое изорбражение</h4>
                    </td>
                    <td>
                        <form action="../include/save.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="geneleft">
                            <input type="submit" value="Загрузить файл!">
                        </form>

                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Правое изорбражение</h4>
                    </td>
                    <td>
                        <form action="../include/save.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="generight">
                            <input type="submit" value="Загрузить файл!">
                        </form>

                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>



</div>