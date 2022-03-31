<?php
require_once '../include/functions.php';
require_once '../include/database.php';

$napravlenia = get_napravlenia($link, 'ru');
$title_ru;
foreach ($napravlenia as $napravlen) {
    $title_ru[$napravlen["Position_uslugi_site"]] = $napravlen["Title_uslugi_site"];
}

$pos = $_GET['pos'];
$projects = edit_project($link,$pos);
?>
<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
    <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Изображение</h2>
            </div>
            <table>
                <tr>
                <td>
                        <h4>Изображение на <br> главной странице</h4>
                    </td>
                    <td width="60px">
                        <form action="../include/save.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="editProj">
                            <input type="submit" value="Загрузить файл!">
                            <input type="text" name="pos" style="width: 100%; display: none; " value="<?php print($pos); ?>">
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <form action="../include/save.php" method="POST" enctype="multipart/form-data">
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2><?php print($name); ?></h2>
                    <input type="submit" value="Сохранить" class="btn" />
                    <input type="text" name="fun" style="width: 100%; display: none; " value="editProject">
                    <input type="text" name="pos" style="width: 100%; display: none; " value="<?php print($pos); ?>">
                </div>
                
                <table>
                <?php foreach($projects as $project) { ?>
                <?php if($project['Lng_project_site']==='ru'){ ?>
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
                                    <td>Приоритет</td>
                                    <td><input type="text" name="prioritet_ru" style="width: 100%;" value="<?php print($project['Prioritet_project_site']);?>"></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Тип проекта</td>
                                    <td><input type="text" name="type_ru" style="width: 100%;" value="<?php print($project['Type_project_site']);?>"></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_ru" style="width: 100%;" value="<?php print($project['Title_project_site']);?>"></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_ru" id="" style="width: 100%;" cols="40" rows="10"><?php print($project['Opisanie_project_site']);?></textarea></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_ru" style="width: 100%;" value="<?php print($project['Srok_project_site']);?>"></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Тип направления</td>
                                    <td><select name="btn_ru">
                                            <option disabled>Выберите тип</option>
                                            <?php foreach ($napravlenia as $napravlen) {?>
                                                <option value="<?php print($napravlen["Position_uslugi_site"]);?>"><?php print($napravlen["Title_uslugi_site"]); ?></option>
                                            <?php }?>
                                        </select></td>
                                    <td>RU</td>
                                </tr>
                                
                    </tbody>
                    <?php }?>
                    <?php if($project['Lng_project_site']==='en'){ ?>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                            <td>Язык</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                                <!--English-->
                                <tr>
                                    <td>Приоритет</td>
                                    <td><input type="text" name="prioritet_en" style="width: 100%;" value="<?php print($project['Prioritet_project_site']);?>"></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Тип проекта</td>
                                    <td><input type="text" name="type_en" style="width: 100%;" value="<?php print($project['Type_project_site']);?>"></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_en" style="width: 100%;" value="<?php print($project['Title_project_site']);?>"></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_en" id="" style="width: 100%;" cols="40" rows="10"><?php print($project['Opisanie_project_site']);?></textarea></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_en" style="width: 100%;" value="<?php print($project['Srok_project_site']);?>"></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Тип направления</td>
                                    <td><select name="btn_en">
                                            <option disabled>Выберите тип</option>
                                            <?php foreach ($napravlenia as $napravlen) {?>
                                                <option value="<?php print($napravlen["Position_uslugi_site"]);?>"><?php print($napravlen["Title_uslugi_site"]); ?></option>
                                            <?php }?>
                                        </select></td>
                                    <td>ENG</td>
                                </tr>
                            
                    </tbody>
                    <?php }?>
                    <?php if($project['Lng_project_site']==='kz'){ ?>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                            <td>Язык</td>
                        </tr>
                    </thead>
                    <tbody>
                                <!--Kazakh-->
                                <tr>
                                    <td>Приоритет</td>
                                    <td><input type="text" name="prioritet_kz" style="width: 100%;" value="<?php print($project['Prioritet_project_site']);?>"></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Тип проекта</td>
                                    <td><input type="text" name="type_kz" style="width: 100%;" value="<?php print($project['Type_project_site']);?>"></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_kz" style="width: 100%;" value="<?php print($project['Title_project_site']);?>"></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_kz" id="" style="width: 100%;" cols="40" rows="10"><?php print($project['Opisanie_project_site']);?></textarea></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_kz" style="width: 100%;" value="<?php print($project['Srok_project_site']);?>"></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Тип направления</td>
                                    <td><select name="btn_kz">
                                            <option disabled>Выберите тип</option>
                                            <?php foreach ($napravlenia as $napravlen) {?>
                                                <option value="<?php print($napravlen["Position_uslugi_site"]);?>"><?php print($napravlen["Title_uslugi_site"]); ?></option>
                                            <?php }?>
                                        </select></td>
                                    <td>KZ</td>
                                </tr>
                    </tbody>
                    <?php }?>
                    <?php }?>
                </table>
                
            </div>
        </form>

    </div>
</div>