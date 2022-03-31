<?php
require_once '../include/functions.php';
require_once '../include/database.php';

$id = $_GET['pos'];
$dop = $_GET['dop'];
$editions = spisok_edition($link, $id, $dop);
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
                            <input type="file" name="editEdit">
                            <input type="submit" value="Загрузить файл!">
                            <input type="text" name="pos" style="width: 100%; display: none; " value="<?php print($id); ?>">
                            <input type="text" name="dop" style="width: 100%; display: none; " value="<?php print($dop); ?>">
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <form action="../include/save.php" method="POST" enctype="multipart/form-data">
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2>Дополнительное описание</h2>
                    <input type="submit" value="Сохранить" class="btn" />
                    <input type="text" name="fun" style="width: 100%; display: none; " value="editEdit">
                    <input type="text" name="kol" style="width: 100%; display: none; " value="<?php print($kol); ?>">
                    <input type="text" name="pos" style="width: 100%; display: none; " value="<?php print($id); ?>">
                    <input type="text" name="dop" style="width: 100%; display: none; " value="<?php print($dop); ?>">
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
                        <?php foreach($editions as $edition){
                            if($edition['Lng_more_project_site']==='ru')
                            {
                            ?>
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="title_ru" style="width: 100%;" value="<?php print($edition['Title_more_project_site']);?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="opisanie_ru" id="" style="width: 100%;" cols="40" rows="10"><?php print($edition['Opisanie_more_project_site']);?></textarea></td>
                            <td>RU</td>
                        </tr>
                        <?php } 
                    }?>
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
                        <?php foreach($editions as $edition){
                            if($edition['Lng_more_project_site']==='en')
                            {
                            ?>
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="title_en" style="width: 100%;" value="<?php print($edition['Title_more_project_site']);?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="opisanie_en" id="" style="width: 100%;" cols="40" rows="10"><?php print($edition['Opisanie_more_project_site']);?></textarea></td>
                            <td>ENG</td>
                        </tr>
                        <?php } 
                    }?>
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
                        <?php foreach($editions as $edition){
                            if($edition['Lng_more_project_site']==='kz')
                            {
                            ?>
                        <tr>
                            <td>Заголовок</td>
                            <td><input type="text" name="title_kz" style="width: 100%;" value="<?php print($edition['Title_more_project_site']);?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="opisanie_kz" id="" style="width: 100%;" cols="40" rows="10"><?php print($edition['Opisanie_more_project_site']);?></textarea></td>
                            <td>KZ</td>
                        </tr>
                        <?php } 
                    }?>
                    </tbody>
                </table>
            </div>
        </form>

    </div>



</div>