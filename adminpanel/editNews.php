<?php
require_once '../include/functions.php';
require_once '../include/database.php';

$news = get_curent_news($link,$_GET['pos']);
?>
<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
        <form action="../include/save.php" method="POST" enctype="multipart/form-data">
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2>Редактировать новость</h2>
                    <input type="submit" value="Сохранить" class="btn" />
                    <input type="text" name="fun" style="width: 100%; display: none; " value="editNews">
                    <input type="text" name="pos" style="width: 100%; display: none; " value="<?php print($_GET['pos']);?>">
                </div>
                <table>
                <thead>
                        <tr>
                            <td>Название</td>
                            <td>Файл</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($news as $new) { if($new['Lng_news']==='ru') { ?>
                        <tr>
                            <td>Дата публикации</td>
                            <td><input type="datetime-local"  id="localdate" name="date" value="<?php echo str_replace(' ','T',$new['date_reliz_news']); ?>" /> </td>
                        </tr>
                        <?php }}?>
                    </tbody>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                            <td>Язык</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Russian-->
                        <?php foreach($news as $new) { if($new['Lng_news']==='ru') { ?>
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="title_ru" style="width: 100%;" value="<?php print($new['title_news']);?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="opisanie_ru" id="" style="width: 100%;" cols="40" rows="10"><?php print($new['opisanie_news']);?></textarea></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Направления</td>
                            <td><input type="text" name="napravlenia_ru" style="width: 100%;" value="<?php print($new['napravlenia_news']);?>"></td>
                            <td>RU</td>
                        </tr>
                        <?php }}?>
                    </tbody>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                            <td>Язык</td>
                        </tr>
                    </thead>
                    <tbody>

                        <!--English-->
                        <?php foreach($news as $new) { if($new['Lng_news']==='en') { ?>
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="title_en" style="width: 100%;" value="<?php print($new['title_news']);?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="opisanie_en" id="" style="width: 100%;" cols="40" rows="10"><?php print($new['opisanie_news']);?></textarea></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Направления</td>
                            <td><input type="text" name="napravlenia_en" style="width: 100%;" value="<?php print($new['napravlenia_news']);?>"></td>
                            <td>ENG</td>
                        </tr>
                        <?php }}?>
                    </tbody>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Текст</td>
                            <td>Язык</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Kazakh-->
                        <?php foreach($news as $new) { if($new['Lng_news']==='kz') { ?>
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="title_kz" style="width: 100%;" value="<?php print($new['title_news']);?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="opisanie_kz" id="" style="width: 100%;" cols="40" rows="10"><?php print($new['opisanie_news']);?></textarea></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Направления</td>
                            <td><input type="text" name="napravlenia_kz" style="width: 100%;" value="<?php print($new['napravlenia_news']);?>"></td>
                            <td>KZ</td>
                        </tr>
                        <?php }}?>
                    </tbody>
                </table>
            </div>
        </form>

    </div>
</div>