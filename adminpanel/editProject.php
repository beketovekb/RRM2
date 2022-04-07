<?php
require_once '../include/functions.php';
require_once '../include/database.php';

$napravlenia = get_napravlenia($link, 'ru');
$title_ru;
foreach ($napravlenia as $napravlen) {
    $title_ru[$napravlen["Position_uslugi_site"]] = $napravlen["Title_uslugi_site"];
}

$pos = $_GET['pos'];
$projects = edit_project($link, $pos);
$editions = spisok_editions($link, $pos);
$col = 0;
foreach ($editions as $edition) {
    $col++;
}
$imgs = get_img_project($link, $pos);
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
                    <input type="text" name="fun" style="width: 100%; display: none; " value="editProject">
                    <input type="text" name="pos" style="width: 100%; display: none; " value="<?php print($pos); ?>">
                </div>

                <table>
                    <?php foreach ($projects as $project) { ?>
                        <?php if ($project['Lng_project_site'] === 'ru') { ?>
                            <thead>
                                <tr>
                                    <td>Название</td>
                                    <td>Текст</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Приоритет</td>
                                    <td><select name="prioritet_ru" class="select_style">
                                            <?php
                                            $sel1 = '';
                                            $sel2 = '';
                                            $sel3 = '';
                                            switch ($project['Prioritet_project_site']) {
                                                case '1':
                                                    $sel1 = 'selected';
                                                    break;
                                                case '2':
                                                    $sel2 = 'selected';
                                                    break;
                                                case '3':
                                                    $sel3 = 'selected';
                                                    break;
                                            } ?>
                                            <option disabled>Выберите Приоритет</option>
                                            <option value="1" <?php print($sel1); ?>>Высокий</option>
                                            <option value="2" <?php print($sel2); ?>>Средний</option>
                                            <option value="3" <?php print($sel3); ?>>Низкий</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>Тип направления</td>
                                    <td><select name="btn_ru" class="select_style">
                                            <option disabled>Выберите тип</option>
                                            <?php foreach ($napravlenia as $napravlen) {
                                                if ($napravlen["type_proj_or_prod"] === '2') {  ?>
                                                    <option value="<?php print($napravlen["Position_uslugi_site"]); ?>"<?php if($napravlen["Position_uslugi_site"]=== $project['Type_project_site']) print('selected');; ?>><?php print($napravlen["Title_uslugi_site"]); ?></option>
                                            <?php }
                                            } ?>
                                        </select></td>
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
                                <!--Russian-->


                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_ru" style="width: 100%;" value="<?php print(str_replace('"', "'", $project['Title_project_site'])); ?>"></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_ru" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace('<br>', "\n", str_replace('"', "'", $project['Opisanie_project_site']))); ?></textarea></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_ru" style="width: 100%;" value="<?php print($project['Srok_project_site']); ?>"></td>
                                    <td>RU</td>
                                </tr>


                            </tbody>
                        <?php } ?>
                        <?php if ($project['Lng_project_site'] === 'en') { ?>
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
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_en" style="width: 100%;" value="<?php print(str_replace('"', "'", $project['Title_project_site'])); ?>"></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_en" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace('<br>', "\n", str_replace('"', "'", $project['Opisanie_project_site']))); ?></textarea></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_en" style="width: 100%;" value="<?php print($project['Srok_project_site']); ?>"></td>
                                    <td>ENG</td>
                                </tr>

                            </tbody>
                        <?php } ?>
                        <?php if ($project['Lng_project_site'] === 'kz') { ?>
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
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_kz" style="width: 100%;" value="<?php print(str_replace('"', "'", $project['Title_project_site'])); ?>"></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_kz" id="" style="width: 100%;" cols="40" rows="10"><?php print(str_replace('<br>', "\n", str_replace('"', "'", $project['Opisanie_project_site']))); ?></textarea></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_kz" style="width: 100%;" value="<?php print($project['Srok_project_site']); ?>"></td>
                                    <td>KZ</td>
                                </tr>
                            </tbody>
                    <input type="submit" value="Сохранить" class="btn" />
                        <?php } ?>
                    <?php } ?>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Описание</td>
                            <td>Кнопка</td>
                            <td>Удалить</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Добавить новое</td>
                            <td>Для того чтобы добавить новое дополнение</td>
                            <td><a href="/admin/admin.php?str=newEditions&pos=<?php print($pos); ?>&new=<?php print($col); ?>" class="btn">Добавить</a></td>
                        </tr>
                        <?php foreach ($editions as $edition) { ?>

                            <!--Russian-->
                            <tr>
                                <td><?php print($edition['Title_more_project_site']); ?></td>
                                <td><?php if (strlen($edition['Opisanie_more_project_site']) >= 60) {
                                        print(mb_strimwidth($edition['Opisanie_more_project_site'], 0, 60, "..."));
                                    } else {
                                        print($edition['Opisanie_more_project_site']);
                                    } ?></td>
                                <td><a href="/admin/admin.php?str=editEditions&pos=<?php print($edition['Title_project_site']); ?>&dop=<?php print($edition['uk_more_project_site']); ?>" class="btn">Редактировать</a></td>
                                <td><a href="../include/delete.php?type=opis&pos=<?php print($edition['Title_project_site']); ?>&uk=<?php print($edition['uk_more_project_site']); ?>"  class="btn">Удалить</a></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </form>
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Дополнительные изображения</h2>
            </div>
            <table>
                <tr>
                    <td>
                        <h4>Добавить изображение</h4>
                    </td>
                    <td width="60px">
                        <form action="../include/save.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="addimgproj">
                            <input type="submit" value="Загрузить файл!">
                            <input type="text" name="pos" style="width: 100%; display: none; " value="<?php print($pos); ?>">
                        </form>
                    </td>
                </tr>
                <?php foreach ($imgs as $img) { ?>
                    <tr>
                        <td>
                            <div style="background: url(<?php print($img['Url_img_project']); ?>) 100% 100% no-repeat; background-size: cover; width: 100px; height: 100px;"></div>
                        </td>
                        <td><a href="../include/delete.php?type=imgproj&pos=<?php print($img['uk_project_site']); ?>&ig=<?php print($img['Url_img_project']); ?>"  class="btn">Удалить</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </div>
</div>

<script>
    function deldop() {
        console.log("Ok");
        swal({
                title: "Вы уверены?",
                text: "Удаление файла!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Да, удалить!"
            },
            function() {
                document.location.href ="../include/delete.php?type=opis&pos=<?php print($edition['Title_project_site']); ?>&uk=<?php print($edition['uk_more_project_site']); ?>";
                alert("Удалён!");
            });
    }
</script>