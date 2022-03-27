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
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Главный блок</h2>
            <input type="submit" value="Save"  class="btn"/>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Название</td>
                    <td>Текс</td>
                    <td>Язык</td>
                </tr>
            </thead>
            <tbody>
                <!--Russian-->
                <tr>
                    <td>Верх</td>
                    <td><input type="text" name="r1" style="width: 100%;" value="<?php print($ftitler['1']);?>"></td>
                    <td>RU</td>
                </tr>
                <tr>
                    <td>Серидина</td>
                    <td><input type="text" name="r2" style="width: 100%;" value="<?php print($ftitler['2']);?>"></td>
                    <td>RU</td>
                </tr>
                <tr>
                    <td>Низ</td>
                    <td><input type="text" name="r3" style="width: 100%;" value="<?php print($ftitler['3']);?>"></td>
                    <td>RU</td>
                </tr>
                <!--Englis-->
                <tr>
                    <td>Верх</td>
                    <td><input type="text" name="e1" style="width: 100%;" value="<?php print($ftitlee['1']);?>"></td>
                    <td>ENG</td>
                </tr>
                <tr>
                    <td>Серидина</td>
                    <td><input type="text" name="e2" style="width: 100%;" value="<?php print($ftitlee['2']);?>"></td>
                    <td>ENG</td>
                </tr>
                <tr>
                    <td>Низ</td>
                    <td><input type="text" name="e3" style="width: 100%;" value="<?php print($ftitlee['3']);?>"></td>
                    <td>ENG</td>
                </tr>
                <!-- Kazakh-->
                <tr>
                    <td>Верх</td>
                    <td><input type="text" name="k1" style="width: 100%;" value="<?php print($ftitlek['1']);?>"></td>
                    <td>KZ</td>
                </tr>
                <tr>
                    <td>Серидина</td>
                    <td><input type="text" name="k2" style="width: 100%;" value="<?php print($ftitlek['2']);?>"></td>
                    <td>KZ</td>
                </tr>
                <tr>
                    <td>Низ</td>
                    <td><input type="text" name="k3" style="width: 100%;" value="<?php print($ftitlek['3']);?>"></td>
                    <td>KZ</td>
                </tr>
            </tbody>
        </table>
    </div>
    </form>
</div>

</div>