<?php
$titles = get_titles_admin($link);
$ftitler;
$ftitlee;
$ftitlek;
foreach ($titles as $title) {
    switch ($title["Lng_title"]) {
        case 'ru':
            $ftitler[$title["Number"]]=$title["Text"];
        break;
        case 'en':
            $ftitlee[$title["Number"]]=$title["Text"];
        break;
        case 'kz':
            $ftitlek[$title["Number"]]=$title["Text"];
        break;
        
    }
    

}
?>
<div class="main">
<?php include "menu.php";?>
<div class="details">
    <form action="../include/save.php" method="POST">
    <div class="recentOrders  toggle_accordion1 accordion">
        <div class="cardHeader">
        <h2 class="edit_accordion1">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 13L11.2929 13.7071L12 14.4142L12.7071 13.7071L12 13ZM5.29289 7.70711L11.2929 13.7071L12.7071 12.2929L6.70711 6.29289L5.29289 7.70711ZM12.7071 13.7071L18.7071 7.70711L17.2929 6.29289L11.2929 12.2929L12.7071 13.7071Z" fill="#d69600"/>
                <path d="M17 18L7 18" stroke="#d69600" stroke-width="2"/>
            </svg>
            Меню
        </h2>
            <input type="text" name="fun" style="width: 100%; display: none; " value="menu">
        </div>
        <table>
            <thead>
                <tr style="border-bottom: none;">
                    <td style="color: #959595; font-weight: 400;" colspan="3">ТЕКСТ НА РУССКОМ ЯЗЫКЕ</td>
                </tr>
                <tr>
                    <td>Позиция</td>
                    <td>Текст</td>
                    <td>Язык</td>
                </tr>
            </thead>
            <tbody>
                <!--Russian-->
                <tr>
                    <td>1</td>
                    <td><input type="text" name="r16" style="width: 100%;" value="<?php print($ftitler['16']);?>"></td>
                    <td>RU</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="text" name="r17" style="width: 100%;" value="<?php print($ftitler['17']);?>"></td>
                    <td>RU</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input type="text" name="r18" style="width: 100%;" value="<?php print($ftitler['18']);?>"></td>
                    <td>RU</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><input type="text" name="r19" style="width: 100%;" value="<?php print($ftitler['19']);?>"></td>
                    <td>RU</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><input type="text" name="r20" style="width: 100%;" value="<?php print($ftitler['20']);?>"></td>
                    <td>RU</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><input type="text" name="r21" style="width: 100%;" value="<?php print($ftitler['21']);?>"></td>
                    <td>RU</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><input type="text" name="r22" style="width: 100%;" value="<?php print($ftitler['22']);?>"></td>
                    <td>RU</td>
                </tr>
            </tbody>
            <!--Englis-->
            <thead>
                <tr style="border-bottom: none;">
                    <td style="color: #959595; font-weight: 400;" colspan="3">ТЕКСТ НА АНГЛИЙСКОМ ЯЗЫКЕ</td>
                </tr>
                <tr>
                    <td>Позиция</td>
                    <td>Текст</td>
                    <td>Язык</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><input type="text" name="e16" style="width: 100%;" value="<?php print($ftitlee['16']);?>"></td>
                    <td>EN</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="text" name="e17" style="width: 100%;" value="<?php print($ftitlee['17']);?>"></td>
                    <td>EN</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input type="text" name="e18" style="width: 100%;" value="<?php print($ftitlee['18']);?>"></td>
                    <td>EN</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><input type="text" name="e19" style="width: 100%;" value="<?php print($ftitlee['19']);?>"></td>
                    <td>EN</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><input type="text" name="e20" style="width: 100%;" value="<?php print($ftitlee['20']);?>"></td>
                    <td>EN</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><input type="text" name="e21" style="width: 100%;" value="<?php print($ftitlee['21']);?>"></td>
                    <td>EN</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><input type="text" name="e22" style="width: 100%;" value="<?php print($ftitlee['22']);?>"></td>
                    <td>EN</td>
                </tr>
            </tbody>
            <!--KZ-->
            <thead>
                <tr style="border-bottom: none;">
                    <td style="color: #959595; font-weight: 400;" colspan="3">ТЕКСТ НА КАЗАХСКОМ ЯЗЫКЕ</td>
                </tr>
                <tr>
                    <td>Позиция</td>
                    <td>Текст</td>
                    <td>Язык</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><input type="text" name="k16" style="width: 100%;" value="<?php print($ftitlek['16']);?>"></td>
                    <td>KZ</td>
                </tr>
                <tr>
                    <td >2</td>
                    <td><input type="text" name="k17" style="width: 100%;" value="<?php print($ftitlek['17']);?>"></td>
                    <td>KZ</td>
                </tr>
                <tr>
                    <td >3</td>
                    <td><input type="text" name="k18" style="width: 100%;" value="<?php print($ftitlek['18']);?>"></td>
                    <td>KZ</td>
                </tr>
                <tr>
                    <td >4</td>
                    <td><input type="text" name="k19" style="width: 100%;" value="<?php print($ftitlek['19']);?>"></td>
                    <td>KZ</td>
                </tr>
                <tr>
                    <td >5</td>
                    <td><input type="text" name="k20" style="width: 100%;" value="<?php print($ftitlek['20']);?>"></td>
                    <td>KZ</td>
                </tr>
                <tr>
                    <td >6</td>
                    <td><input type="text" name="k21" style="width: 100%;" value="<?php print($ftitlek['21']);?>"></td>
                    <td>KZ</td>
                </tr>
                <tr>
                    <td >7</td>
                    <td><input type="text" name="k22" style="width: 100%;" value="<?php print($ftitlek['22']);?>"></td>
                    <td>KZ</td>
                </tr>
            </tbody>
        </table>
            <input type="submit" value="Сохранить"  class="btn"/>
    </div>
    </form>
</div>

</div>