<?php
$news = get_news($link);
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
            <div class="recentOrders aboutOrders toggle_accordion1 accordion">
                <div class="cardHeader">
                <h2 class="edit_accordion1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 13L11.2929 13.7071L12 14.4142L12.7071 13.7071L12 13ZM5.29289 7.70711L11.2929 13.7071L12.7071 12.2929L6.70711 6.29289L5.29289 7.70711ZM12.7071 13.7071L18.7071 7.70711L17.2929 6.29289L11.2929 12.2929L12.7071 13.7071Z" fill="#d69600" />
                            <path d="M17 18L7 18" stroke="#d69600" stroke-width="2" />
                        </svg>
                        Основной текст блока "Проекты"
                    </h2>
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
                            <td><input type="text" name="r14" style="width: 100%;" value="<?php print($ftitler['14']); ?>"></td>
                            <td>RU</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="r15" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitler['15']); ?></textarea></td>
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
                            <td><input type="text" name="e14" style="width: 100%;" value="<?php print($ftitlee['14']); ?>"></td>
                            <td>ENG</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="e15" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlee['15']); ?></textarea></td>
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
                            <td><input type="text" name="k14" style="width: 100%;" value="<?php print($ftitlek['14']); ?>"></td>
                            <td>KZ</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td><textarea name="k15" id="" style="width: 100%;" cols="40" rows="10"><?php print($ftitlek['15']); ?></textarea></td>
                            <td>KZ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
            <div class="recentOrders aboutOrders  toggle_accordion2">
                <div class="cardHeader">
                <h2 class="edit_accordion2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 13L11.2929 13.7071L12 14.4142L12.7071 13.7071L12 13ZM5.29289 7.70711L11.2929 13.7071L12.7071 12.2929L6.70711 6.29289L5.29289 7.70711ZM12.7071 13.7071L18.7071 7.70711L17.2929 6.29289L11.2929 12.2929L12.7071 13.7071Z" fill="#d69600" />
                        <path d="M17 18L7 18" stroke="#d69600" stroke-width="2" />
                    </svg>
                    Список проектов
                </h2>
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
                    <?php foreach($news as $ne) { if($ne['Lng_news']==='ru'){ ?>
                    <tbody>
                        <!--Russian-->
                        <tr>
                            <td><?php print($ne['title_news']);?></td>
                            <td><?php if(strlen($ne['opisanie_news'])>=60){print(substr($ne['opisanie_news'], 0, 60)."...");} else {print($ne['opisanie_news']);}?></td>
                            <td><a href="/admin/admin.php?str=editProject&pos=<?php print($ne['uk_news']);?>" class="btn">Редактировать</a></td>
                            <td><a href="../include/delete.php?type=proj&pos=<?php print($ne['uk_news']);?>" class="btn">Удалить</a></td>
                        </tr>
                    </tbody>
                    <?php }} ?>
                </table>
            </div>
    </div>



</div>