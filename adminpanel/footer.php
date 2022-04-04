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
            <div class="recentOrders aboutOrders toggle_accordion1 contactTable">
                <div class="cardHeader">
                <h2 class="edit_accordion1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 13L11.2929 13.7071L12 14.4142L12.7071 13.7071L12 13ZM5.29289 7.70711L11.2929 13.7071L12.7071 12.2929L6.70711 6.29289L5.29289 7.70711ZM12.7071 13.7071L18.7071 7.70711L17.2929 6.29289L11.2929 12.2929L12.7071 13.7071Z" fill="#d69600" />
                            <path d="M17 18L7 18" stroke="#d69600" stroke-width="2" />
                        </svg>
                        Контакты
                    </h2>
                    <input type="text" name="fun" style="width: 100%; display: none; " value="footer">
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
                            <td><input type="text" name="r32" style="width: 100%;" value="<?php print($ftitler['32']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="r33" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitler['33']); ?></textarea></td>
                            <td>RU</td>
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
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="r34" style="width: 100%;" value="<?php print($ftitler['34']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Адрес</td>
                            <td><input type="text" name="r35" style="width: 100%;" value="<?php print($ftitler['35']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Номер телефона</td>
                            <td><input type="text" name="r36" style="width: 100%;" value="<?php print($ftitler['36']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Почта</td>
                            <td><input type="text" name="r37" style="width: 100%;" value="<?php print($ftitler['37']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td><input type="text" name="r38" style="width: 100%;" value="<?php print($ftitler['38']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Текст обратной связи</td>
                            <td><input type="text" name="r39" style="width: 100%;" value="<?php print($ftitler['39']); ?>"></td>
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
                            <td><input type="text" name="e32" style="width: 100%;" value="<?php print($ftitlee['32']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="e33" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlee['33']); ?></textarea></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="e34" style="width: 100%;" value="<?php print($ftitlee['34']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Адрес</td>
                            <td><input type="text" name="e35" style="width: 100%;" value="<?php print($ftitlee['35']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Номер телефона</td>
                            <td><input type="text" name="e36" style="width: 100%;" value="<?php print($ftitlee['36']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Почта</td>
                            <td><input type="text" name="e37" style="width: 100%;" value="<?php print($ftitlee['37']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td><input type="text" name="e38" style="width: 100%;" value="<?php print($ftitlee['38']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Текст обратной связи</td>
                            <td><input type="text" name="e39" style="width: 100%;" value="<?php print($ftitlee['39']); ?>"></td>
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
                            <td><input type="text" name="k32" style="width: 100%;" value="<?php print($ftitlek['32']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="k33" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlek['33']); ?></textarea></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="k34" style="width: 100%;" value="<?php print($ftitlek['34']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Адрес</td>
                            <td><input type="text" name="k35" style="width: 100%;" value="<?php print($ftitlek['35']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Номер телефона</td>
                            <td><input type="text" name="k36" style="width: 100%;" value="<?php print($ftitlek['36']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Почта</td>
                            <td><input type="text" name="k37" style="width: 100%;" value="<?php print($ftitlek['37']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td><input type="text" name="k38" style="width: 100%;" value="<?php print($ftitlek['38']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Текст обратной связи</td>
                            <td><input type="text" name="k39" style="width: 100%;" value="<?php print($ftitlek['39']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                    </tbody>
                </table>
                    <input type="submit" value="Сохранить" class="btn" />
            </div>
        </form>
    </div>



</div>