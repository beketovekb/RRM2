<?php
require_once '../include/functions.php';
require_once '../include/database.php';
$pos = $_GET['pos'];
$directions = get_competencie($link, $pos);
$name;
foreach ($directions as $direction) {
    if($direction['lng_competencies']==='ru')
    {
        $name = $direction['title_competencies'];
        //$tp = $direction['type_proj_or_prod'];
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
        
        <form action="../include/save.php" method="POST">
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2><?php print($name); ?></h2>
                    <input type="text" name="fun" style="width: 100%; display: none; " value="edit_compettit">
                    <input type="text" name="pos" style="width: 100%; display: none; " value="<?php print($pos); ?>">
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
                        <?php foreach ($directions as $direction) {
                            if ($direction['lng_competencies'] === 'ru') { ?>
                                <!--Russian-->
                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_ru" style="width: 100%;" value="<?php print($direction['title_competencies']); ?>"></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_ru" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $direction['detail_competencies'])); ?></textarea></td>
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
                            if ($direction['lng_competencies'] === 'en') { ?>
                                <!--Russian-->
                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_en" style="width: 100%;" value="<?php print($direction['title_competencies']); ?>"></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_en" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $direction['detail_competencies'])); ?></textarea></td>
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
                            if ($direction['lng_competencies'] === 'kz') { ?>
                                <!--Russian-->
                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_kz" style="width: 100%;" value="<?php print($direction['title_competencies']); ?>"></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_kz" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $direction['detail_competencies'])); ?></textarea></td>
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