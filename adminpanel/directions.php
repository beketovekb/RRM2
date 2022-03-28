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
$direcrtions = get_directions($link);
?>
<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
        <form action="../include/save.php" method="POST">
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2>Направления</h2>
                    <input type="submit" value="Сохранить" class="btn" />
                    <input type="text" name="fun" style="width: 100%; display: none; " value="directionsInfo">
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
                            <td><input type="text" name="r8" style="width: 100%;" value="<?php print($ftitler['8']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="r9" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitler['9']); ?></textarea></td>
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
                            <td><input type="text" name="e8" style="width: 100%;" value="<?php print($ftitlee['8']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="e9" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlee['9']); ?></textarea></td>
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
                            <td><input type="text" name="k8" style="width: 100%;" value="<?php print($ftitlek['8']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="k9" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlek['9']); ?></textarea></td>
                            <td>KZ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2>Направления</h2>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Описание</td>
                            <td>Позиция</td>
                            <td>Кнопка</td>
                        </tr>
                    </thead>
                    <?php foreach($direcrtions as $direcrtion) {
                        if($direcrtion['Lng_uslugi_site']==='ru'){ ?>
                    <tbody>
                        <!--Russian-->
                        <tr>
                            <td><?php print($direcrtion['Title_uslugi_site']);?></td>
                            <td><?php if(strlen($direcrtion['Opisanie_uslugi_site'])>=60){print(substr($direcrtion['Opisanie_uslugi_site'], 0, 60)."...");} else {print($direcrtion['Opisanie_uslugi_site']);}?></td>
                            <td><?php print($direcrtion['Position_uslugi_site']);?></td>
                            <td><a href="/adminpanel/editDirection.php?pos=<?php print($direcrtion['Position_uslugi_site']);?>"><button>Редактировать</button></a></td>
                        </tr>
                    </tbody>
                    <?php }
                    } ?>
                </table>
            </div>
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Изображение</h2>
            </div>
            <table>
                <tr>
                <td>
                        <h4>Изображения</h4>
                    </td>
                    <td width="60px">
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