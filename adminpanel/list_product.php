<?php
$projects = get_all_product($link);
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
$order   = "\n";
$replace = '<br>';
?>
<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
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
                    <?php foreach($projects as $direcrtion) { ?>
                    <tbody>
                        <!--Russian-->
                        <tr>
                            <td><?php print($direcrtion['title_production']);?></td>
                            <td><?php if(strlen($direcrtion['opisanie_production'])>=60){print(mb_strimwidth($direcrtion['opisanie_production'], 0, 59,"..."));} else {print($direcrtion['opisanie_production']);}?></td>
                            <td><a href="/admin/admin.php?str=edit_product&pos=<?php print($direcrtion['uk_production']);?>" class="btn">Редактировать</a></td>
                            <td><a href="../include/delete.php?type=prod&pos=<?php print($direcrtion['uk_production']);?>" class="btn">Удалить</a></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
    </div>



</div>