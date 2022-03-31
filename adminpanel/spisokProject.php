<?php
$projects = get_all_projects($link);
?>
<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2>Направления</h2>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Название</td>
                            <td>Описание</td>
                            <td>Кнопка</td>
                        </tr>
                    </thead>
                    <?php foreach($projects as $direcrtion) { ?>
                    <tbody>
                        <!--Russian-->
                        <tr>
                            <td><?php print($direcrtion['Title_project_site']);?></td>
                            <td><?php if(strlen($direcrtion['Opisanie_project_site'])>=60){print(substr($direcrtion['Opisanie_project_site'], 0, 60)."...");} else {print($direcrtion['Opisanie_uslugi_site']);}?></td>
                            <td><a href="/admin/admin.php?str=editProject&pos=<?php print($direcrtion['uk_project_site']);?>" class="btn">Редактировать</a></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
    </div>



</div>