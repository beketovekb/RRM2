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
    $order   = "\n";
    $replace = '<br>';
}
?>
<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
        <form action="../include/save.php" method="POST">
            <div class="recentOrders aboutOrders  toggle_accordion1">
                <div class="cardHeader">
                <h2 class="edit_accordion1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 13L11.2929 13.7071L12 14.4142L12.7071 13.7071L12 13ZM5.29289 7.70711L11.2929 13.7071L12.7071 12.2929L6.70711 6.29289L5.29289 7.70711ZM12.7071 13.7071L18.7071 7.70711L17.2929 6.29289L11.2929 12.2929L12.7071 13.7071Z" fill="#d69600" />
                            <path d="M17 18L7 18" stroke="#d69600" stroke-width="2" />
                        </svg>
                        Обратная связь
                    </h2>
                    <input type="text" name="fun" style="width: 100%; display: none; " value="feedback">
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
                            <td><input type="text" name="r6" style="width: 100%;" value="<?php print($ftitler['6']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="r7" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $ftitler['7'])); ?></textarea></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="r24" style="width: 100%;" value="<?php print($ftitler['24']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><input type="text" name="r25" style="width: 100%;" value="<?php print($ftitler['25']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td><input type="text" name="r26" style="width: 100%;" value="<?php print($ftitler['26']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Номер</td>
                            <td><input type="text" name="r27" style="width: 100%;" value="<?php print($ftitler['27']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Кнопка</td>
                            <td><input type="text" name="r28" style="width: 100%;" value="<?php print($ftitler['28']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Согласие</td>
                            <td><input type="text" name="r29" style="width: 100%;" value="<?php print($ftitler['29']); ?>"></td>
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
                            <td><input type="text" name="e6" style="width: 100%;" value="<?php print($ftitlee['6']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="e7" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $ftitlee['7'])); ?></textarea></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="e24" style="width: 100%;" value="<?php print($ftitlee['24']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><input type="text" name="e25" style="width: 100%;" value="<?php print($ftitlee['25']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td><input type="text" name="e26" style="width: 100%;" value="<?php print($ftitlee['26']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Номер</td>
                            <td><input type="text" name="e27" style="width: 100%;" value="<?php print($ftitlee['27']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Кнопка</td>
                            <td><input type="text" name="e28" style="width: 100%;" value="<?php print($ftitlee['28']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Согласие</td>
                            <td><input type="text" name="e29" style="width: 100%;" value="<?php print($ftitlee['29']); ?>"></td>
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
                            <td><input type="text" name="k6" style="width: 100%;" value="<?php print($ftitlek['6']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="k7" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $ftitlek['7'])); ?></textarea></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="k24" style="width: 100%;" value="<?php print($ftitlek['24']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><input type="text" name="k25" style="width: 100%;" value="<?php print($ftitlek['25']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td><input type="text" name="k26" style="width: 100%;" value="<?php print($ftitlek['26']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Номер</td>
                            <td><input type="text" name="k27" style="width: 100%;" value="<?php print($ftitlek['27']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Кнопка</td>
                            <td><input type="text" name="k28" style="width: 100%;" value="<?php print($ftitlek['28']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Согласие</td>
                            <td><input type="text" name="k29" style="width: 100%;" value="<?php print($ftitlek['29']); ?>"></td>
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
                    Изображение
                </h2>
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