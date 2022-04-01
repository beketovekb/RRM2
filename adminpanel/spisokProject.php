<?php
$projects = get_all_projects($link);
$partners = get_partners($link);
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
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2>Проекты</h2>
                    <input type="submit" value="Сохранить" class="btn" />
                    <input type="text" name="fun" style="width: 100%; display: none; " value="textproj">
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
                            <td><input type="text" name="r10" style="width: 100%;" value="<?php print($ftitler['10']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="r11" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitler['11']); ?></textarea></td>
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
                            <td><input type="text" name="e10" style="width: 100%;" value="<?php print($ftitlee['10']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="e11" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlee['11']); ?></textarea></td>
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
                            <td><input type="text" name="k10" style="width: 100%;" value="<?php print($ftitlek['10']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="k11" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlek['11']); ?></textarea></td>
                            <td>KZ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2>Список проектов</h2>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Описание</td>
                            <td>Кнопка</td>
                            <td>Удалить</td>
                        </tr>
                    </thead>
                    <?php foreach($projects as $direcrtion) { ?>
                    <tbody>
                        <!--Russian-->
                        <tr>
                            <td><?php print($direcrtion['Title_project_site']);?></td>
                            <td><?php if(strlen($direcrtion['Opisanie_project_site'])>=60){print(substr($direcrtion['Opisanie_project_site'], 0, 60)."...");} else {print($direcrtion['Opisanie_project_site']);}?></td>
                            <td><a href="/admin/admin.php?str=editProject&pos=<?php print($direcrtion['uk_project_site']);?>" class="btn">Редактировать</a></td>
                            <td><a href="../include/delete.php?type=proj&pos=<?php print($direcrtion['uk_project_site']);?>" class="btn">Удалить</a></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
    </div>



</div>