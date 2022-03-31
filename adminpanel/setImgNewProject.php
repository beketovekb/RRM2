<?php
require_once '../include/functions.php';
require_once '../include/database.php';

$napravlenia = get_napravlenia($link, 'ru');
$title_ru;
foreach ($napravlenia as $napravlen) {
    $title_ru[$napravlen["Position_uslugi_site"]] = $napravlen["Title_uslugi_site"];
}
?>
<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">

        <div class="recentOrders aboutOrders">
            <div class="cardHeader">
                <h2><?php print($name); ?></h2>
                <a href="/admin/admin.php?str=newEditions&pos=<?php print($_GET['pos']); ?>&new=1" class="btn">Закончить</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>Название</td>
                        <td>Файл</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h4>Дополнительное изображения проекта</h4>
                        </td>
                        <form action="../include/save.php" method="POST" enctype="multipart/form-data">
                            <td width="60px">
                                <input type="file" name="newimgproj" id="img">
                                <input type="text" name="fun" style="width: 100%; display: none; " value="newImgProject">
                                <input type="text" name="pos" style="width: 100%; display: none; " value="<?php print($_GET['pos']);?>">
                            </td>
                            <td>
                                <input type="submit" value="Добавить" class="btn" />
                            </td>
                        </form>
                    </tr>
                </tbody>

            </table>
        </div>


    </div>
</div>