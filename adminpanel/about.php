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
    $order   = array("\r\n", "\n", "\r");
    $replace = '<br />';
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
                        О нас
                    </h2>
                    <input type="text" name="fun" style="width: 100%; display: none; " value="about">
                </div>
                <table>
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
                            <td>Заголовок</td>
                            <td><input type="text" name="r4" style="width: 100%;" value="<?php print($ftitler['4']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="r5" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $ftitler['5'])); ?></textarea></td>
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
                    Фоновое изображение блока
                </h2>
            </div>
            <table>
                <tr>
                    <td>
                        <h4>Фоновое изображение</h4>
                    </td>
                    <td>
                        <form action="../include/save.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="abo">
                            <input type="submit" value="Загрузить файл!">
                        </form>

                    </td>
                </tr>
            </table>
        </div>
    </div>



</div>