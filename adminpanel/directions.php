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
$order   = "\n";
    $replace = '<br>';
?>
<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
        <form action="../include/save.php" method="POST">
            <div class="recentOrders aboutOrders  toggle_accordion1 accordion">
                <div class="cardHeader">
                <h2 class="edit_accordion1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 13L11.2929 13.7071L12 14.4142L12.7071 13.7071L12 13ZM5.29289 7.70711L11.2929 13.7071L12.7071 12.2929L6.70711 6.29289L5.29289 7.70711ZM12.7071 13.7071L18.7071 7.70711L17.2929 6.29289L11.2929 12.2929L12.7071 13.7071Z" fill="#d69600" />
                            <path d="M17 18L7 18" stroke="#d69600" stroke-width="2" />
                        </svg>
                        Основной текст блока "Направления"
                    </h2>
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
                            <td><textarea name="r9" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $ftitler['9'])); ?></textarea></td>
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
                            <td><textarea name="e9" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $ftitlee['9'])); ?></textarea></td>
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
                            <td><textarea name="k9" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace($replace, $order, $ftitlek['9'])); ?></textarea></td>
                            <td>KZ</td>
                        </tr>
                    </tbody>
                </table>
                    <input type="submit" value="Сохранить" class="btn" />
            </div>
        </form>
            <div class="recentOrders aboutOrders toggle_accordion2 ">
                <div class="cardHeader">
                <h2 class="edit_accordion2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 13L11.2929 13.7071L12 14.4142L12.7071 13.7071L12 13ZM5.29289 7.70711L11.2929 13.7071L12.7071 12.2929L6.70711 6.29289L5.29289 7.70711ZM12.7071 13.7071L18.7071 7.70711L17.2929 6.29289L11.2929 12.2929L12.7071 13.7071Z" fill="#d69600" />
                        <path d="M17 18L7 18" stroke="#d69600" stroke-width="2" />
                    </svg>
                    Список направлении
                </h2>
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
                            <td><?php if(strlen($direcrtion['Opisanie_uslugi_site'])>=60){print(substr($direcrtion['Opisanie_uslugi_site'], 0, 59)."...");} else {print($direcrtion['Opisanie_uslugi_site']);}?></td>
                            <td><?php print($direcrtion['Position_uslugi_site']);?></td>
                            <td><a href="/admin/admin.php?str=editDirection&pos=<?php print($direcrtion['Position_uslugi_site']);?>" class="btn">Редактировать</a></td>
                        </tr>
                    </tbody>
                    <?php }
                    } ?>
                </table>
            </div>
    </div>



</div>