<div class="main">
    <?php include "menu.php"; ?>
    <div class="details">
        <form action="../include/save.php" method="POST" enctype="multipart/form-data">
            <div class="recentOrders aboutOrders">
                <div class="cardHeader">
                    <h2><?php print($name); ?></h2>
                    <input type="submit" value="Сохранить" class="btn" />
                    <input type="text" name="fun" style="width: 100%; display: none; " value="newProject">
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
                        <h4>Изображения на главной странице</h4>
                    </td>
                    <td width="60px">
                            <input type="file" name="newproj">
                    </td>
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
                                    <td><input type="text" name="title_ru" style="width: 100%;" value=""></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_ru" id="" style="width: 100%;" cols="40" rows="10"></textarea></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_ru" style="width: 100%;" value=""></td>
                                    <td>RU</td>
                                </tr>
                                <tr>
                                    <td>Тип направления</td>
                                    <td><select name="btn_ru">
                                            <option disabled>Выберите тип</option>
                                            <option value="ПЕРЕЙТИ К УСЛУГАМ">Услуги</option>
                                            <option value="ПЕРЕЙТИ К ПРОДУКТАМ">Продукты</option>
                                        </select></td>
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

                                <!--Russian-->
                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_en" style="width: 100%;" value=""></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_en" id="" style="width: 100%;" cols="40" rows="10"></textarea></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_en" style="width: 100%;" value=""></td>
                                    <td>ENG</td>
                                </tr>
                                <tr>
                                    <td>Тип направления</td>
                                    <td><select name="btn_en">
                                            <option disabled>Выберите тип</option>
                                            <option value="GO TO SERVICES">Услуги</option>
                                            <option value="GO TO PRODUCTS">Продукты</option>
                                        </select></td>
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
                                <!--Russian-->
                                <tr>
                                    <td>Заголовок</td>
                                    <td><input type="text" name="title_kz" style="width: 100%;" value=""></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td><textarea name="opisanie_kz" id="" style="width: 100%;" cols="40" rows="10"></textarea></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Под описанием</td>
                                    <td><input type="text" name="srok_kz" style="width: 100%;" value=""></td>
                                    <td>KZ</td>
                                </tr>
                                <tr>
                                    <td>Тип направления</td>
                                    <td><select name="btn_kz">
                                            <option disabled>Выберите тип</option>
                                            <option value="ҚЫЗМЕТТЕРГЕ ӨТУ">Услуги</option>
                                            <option value="ӨНІМДЕРГЕ ӨТУ">Продукты</option>
                                        </select></td>
                                    <td>KZ</td>
                                </tr>
                    </tbody>
                </table>
            </div>
        </form>

    </div>



</div>