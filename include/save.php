<?php
require_once 'functions.php';
require_once 'database.php';
switch ($_POST['fun']) {
    case 'general':
        set_general($link);
        break;
    case 'menu':
        set_menu($link);
        break;
    case 'about':
        set_about($link);
        break;
    case 'feedback':
        set_feedback($link);
        break;
    case 'directionsInfo':
        if (isset($_POST['r8'])) {
            $redirect_url = "/admin/admin.php?str=directions";
            if (set_bd(8, 9, $link)) {
                header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
            }
        }
        break;
    case 'partners':
        if (isset($_POST['r12'])) {
            $redirect_url = "/admin/admin.php?str=listpartner";
            if (set_bd(12, 13, $link)) {
                header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
            }
        }
        break;
    case 'textproj':
        if (isset($_POST['r10'])) {
            $redirect_url = "/admin/admin.php?str=spisokProject";
            if (set_bd(10, 11, $link)) {
                header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
            }
        }
        break;
    case 'footer':
        if (isset($_POST['r32'])) {
            $redirect_url = "/admin/admin.php?str=footer";
            if (set_bd(32, 39, $link)) {
                header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
            }
        }
        break;
    case 'editDirection':
        edit_directions($link);
        break;
    case 'newProject':
        new_project($link);
        break;
    case 'newEdit':
        new_edit($link);
        break;
    case 'editEdit':
        edit_edit($link);
        break;
    case 'editProject':
        edit_projects($link);
        break;
    case 'newNews':
        new_news($link);
        break;
}

if (isset($_FILES['gene'])) {
    $redirect_url = "/admin/admin.php?str=general";
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['gene']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['gene']);
        $sql = "UPDATE img_site SET Url_img_site = '" . $name . "' WHERE Name_img_site = 'general';";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
if (isset($_FILES['geneleft'])) {
    $redirect_url = "/admin/admin.php?str=general";
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['geneleft']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['geneleft']);
        $sql = "UPDATE img_site SET Url_img_site = '" . $name . "' WHERE Name_img_site = 'generalleft';";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
if (isset($_FILES['generight'])) {
    $redirect_url = "/admin/admin.php?str=general";
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['generight']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['generight']);
        $sql = "UPDATE img_site SET Url_img_site = '" . $name . "' WHERE Name_img_site = 'generalright';";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
if (isset($_FILES['abo'])) {
    $redirect_url = "/admin/admin.php?str=general";
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['abo']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['abo']);
        $sql = "UPDATE img_site SET Url_img_site = '" . $name . "' WHERE Name_img_site = 'about';";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
if (isset($_FILES['fed'])) {
    $redirect_url = "/admin/admin.php?str=feedback";
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['fed']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['fed']);
        $sql = "UPDATE img_site SET Url_img_site = '" . $name . "' WHERE Name_img_site = 'feedback';";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
if (isset($_FILES['editProj'])) {
    $redirect_url = "/admin/admin.php?str=editProject&pos=".$_POST['pos'];
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['editProj']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['editProj']);
        $sql = "UPDATE project_site SET Img_project_site = '".$name."' WHERE uk_project_site = '".$_POST['pos']."';";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
if (isset($_FILES['dir'])) {
    $pos = $_POST['pos'];
    $redirect_url = "/admin/admin.php?str=editDirection&pos=".$pos;
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['dir']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['dir']);
        $sql = "UPDATE uslugi_site SET Img_url_uslugi_site = '".$name."' WHERE Position_uslugi_site = '".$pos."'";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo($pos);
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
if (isset($_FILES['dird'])) {
    $pos = $_POST['pos'];
    $redirect_url = "/admin/admin.php?str=editDirection&pos=".$pos;
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['dird']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['dird']);
        $sql = "UPDATE uslugi_site SET Img_more_uslugi_site = '".$name."' WHERE Position_uslugi_site = '".$pos."'";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo($pos);
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
if (isset($_FILES['nextProject'])) {
    $pos = $_GET['pos'];
    $redirect_url = "/admin/admin.php?str=newEditions&pos=".$pos;
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
}
if (isset($_FILES['newimgproj'])) {
    $pos = $_POST['pos'];
    $redirect_url = "/admin/admin.php?str=setImgNewProject&pos=".$pos;
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['newimgproj']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['newimgproj']);
        $sql = "INSERT INTO `img_project` (`id_img_project`, `uk_project_site`, `Url_img_project`) VALUES (NULL, '".$pos."', '".$name."')";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo($pos);
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
if (isset($_FILES['addimgproj'])) {
    $pos = $_POST['pos'];
    $redirect_url = "/admin/admin.php?str=editProject&pos=".$pos;
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['addimgproj']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['addimgproj']);
        $sql = "INSERT INTO `img_project` (`id_img_project`, `uk_project_site`, `Url_img_project`) VALUES (NULL, '".$pos."', '".$name."')";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo($pos);
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
if (isset($_FILES['editEdit'])) {
    $pos = $_POST['pos'];
    $dop = $_POST['dop'];
    $redirect_url = "/admin/admin.php?str=editEditions&pos=".$pos."&dop=".$dop;
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['editEdit']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['editEdit']);
        $sql = "UPDATE `more_project_site` SET `Img_more_project_site` = '".$name."' WHERE `Title_project_site` = '".$pos."' AND `uk_more_project_site` = '".$dop."'";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo($pos);
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
if (isset($_FILES['newpart'])) {
    $redirect_url = "/admin/admin.php?str=listpartner";
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['newpart']);

    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['newpart']);
        $sql = "INSERT INTO `partners` (`id_partners`, `img_partners`, `url_partners`, `name_partners`) VALUES (NULL, '".$name."', NULL, NULL);";
        if ($result = mysqli_query($link, $sql)) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        } else {
            echo($pos);
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}



function set_general($link){
    if (isset($_POST['r1'])) {
        $redirect_url = "/admin/admin.php?str=general";
        $r[1] = $_POST['r1'];
        $r[2] = $_POST['r2'];
        $r[3] = $_POST['r3'];
        $r[4] = $_POST['r4'];
        $r[5] = $_POST['r5'];
        $checkr = 1;

        $e[1] = $_POST['e1'];
        $e[2] = $_POST['e2'];
        $e[3] = $_POST['e3'];
        $e[4] = $_POST['e4'];
        $e[5] = $_POST['e5'];
        $checke = 1;

        $k[1] = $_POST['k1'];
        $k[2] = $_POST['k2'];
        $k[3] = $_POST['k3'];
        $k[4] = $_POST['k4'];
        $k[5] = $_POST['k5'];
        $checkk = 1;

        for ($i = 1; $i <= 3; $i++) {
            $sql = "UPDATE `title_site` SET `Text` = '" . $r[$i] . "' WHERE Number = '" . $i . "' AND Lng_title = 'ru';";
            if ($result = mysqli_query($link, $sql)) {
                $checkr = $i;
            } else {
                echo ($sql);
                echo "Ошибка: " . mysqli_error($link);
            }
        }
        for ($i = 1; $i <= 3; $i++) {
            $sql = "UPDATE `title_site` SET `Text` = '" . $e[$i] . "' WHERE Number = '" . $i . "' AND Lng_title = 'en';";
            if ($result = mysqli_query($link, $sql)) {
                $checke = $i;
            } else {
                echo ($sql);
                echo "Ошибка: " . mysqli_error($link);
            }
        }
        for ($i = 1; $i <= 3; $i++) {
            $sql = "UPDATE `title_site` SET `Text` = '" . $k[$i] . "' WHERE Number = '" . $i . "' AND Lng_title = 'kz';";
            if ($result = mysqli_query($link, $sql)) {
                $checkk = $i;
            } else {
                echo ($sql);
                echo "Ошибка: " . mysqli_error($link);
            }
        }

        $sql = "UPDATE `title_site` SET `Text` = '" . $k[4] . "' WHERE Number = '30' AND Lng_title = 'kz';";
        if ($result = mysqli_query($link, $sql)) {
            $checkk++;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }

        $sql = "UPDATE `title_site` SET `Text` = '" . $k[5] . "' WHERE Number = '23' AND Lng_title = 'kz';";
        if ($result = mysqli_query($link, $sql)) {
            $checkk++;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
        //---------------------------------------------------------------------------------------------
        $sql = "UPDATE `title_site` SET `Text` = '" . $e[4] . "' WHERE Number = '30' AND Lng_title = 'en';";
        if ($result = mysqli_query($link, $sql)) {
            $checke++;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }

        $sql = "UPDATE `title_site` SET `Text` = '" . $e[5] . "' WHERE Number = '23' AND Lng_title = 'en';";
        if ($result = mysqli_query($link, $sql)) {
            $checke++;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
        //---------------------------------------------------------------------------------------------
        $sql = "UPDATE `title_site` SET `Text` = '" . $r[4] . "' WHERE Number = '30' AND Lng_title = 'ru';";
        if ($result = mysqli_query($link, $sql)) {
            $checkr++;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }

        $sql = "UPDATE `title_site` SET `Text` = '" . $r[5] . "' WHERE Number = '23' AND Lng_title = 'ru';";
        if ($result = mysqli_query($link, $sql)) {
            $checkr++;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
        //---------------------------------------------------------------------------------------------
        if ($checkr == 5 and $checke == 5 and $checkk == 5) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        }
    }
}
function set_menu($link){
    if(isset($_POST['r16']))
    {
        $redirect_url ="/admin/admin.php?str=menusite";
        if(set_bd(16,22,$link))
        {
            header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
        }   
    }
}
function set_about($link){
    require_once 'database.php';
    if(isset($_POST['r4']))
    {
        $redirect_url ="/admin/admin.php?str=about";
        if(set_bd(4,5,$link))
        {
            header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
        }   
    }
}
function set_feedback($link){
    
    if(isset($_POST['r6']))
    {
        $redirect_url ="/admin/admin.php?str=feedback";
        if(set_bd(6,7,$link) && set_bd(24,29,$link))
        {
            header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
        }   
    }
}
function set_bd($i1, $i2,$link)
{
    $$checkr = 1;
    $$checke = 1;
    $checkk = 1;
    for ($i = $i1; $i <= $i2; $i++) {
        $r[$i] = $_POST['r' . $i];
        $e[$i] = $_POST['e' . $i];
        $k[$i] = $_POST['k' . $i];
    }
    for ($i = $i1; $i <= $i2; $i++) {
        $sql = "UPDATE `title_site` SET `Text` = '" . $r[$i] . "' WHERE Number = '" . $i . "' AND Lng_title = 'ru';";
        if (mysqli_query($link, $sql)) {
            $checkr = $i;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    }
    for ($i = $i1; $i <= $i2; $i++) {
        $sql = "UPDATE `title_site` SET `Text` = '" . $e[$i] . "' WHERE Number = '" . $i . "' AND Lng_title = 'en';";
        if (mysqli_query($link, $sql)) {
            $checke = $i;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    }
    for ($i = $i1; $i <= $i2; $i++) {
        $sql = "UPDATE `title_site` SET `Text` = '" . $k[$i] . "' WHERE Number = '" . $i . "' AND Lng_title = 'kz';";
        if (mysqli_query($link, $sql)) {
            $checkk = $i;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    }
    if ($checkr == $i2 and $checke == $i2 and $checkk == $i2) {
        return true;
    }
    
}

function edit_directions($link)
{
    $pos=$_POST['pos'];
    $redirect_url = "/admin/admin.php?str=editDirection&pos=".$pos;
    $ru=false;
    $en=false;
    $kz=false;

    $title=str_replace("'","\'",$_POST['title_ru']);
    $type=str_replace("'","\'",$_POST['btn_ru']);
    $opisanie=str_replace("'","\'",$_POST['opisanie_ru']);
    $srok=str_replace("'","\'",$_POST['srok_ru']);
    $sql="UPDATE uslugi_site SET Title_uslugi_site = '".$title."', Type_uslugi_site = '".$type."', Opisanie_uslugi_site = '".$opisanie."', Srok_uslugi_site = '".$srok."' WHERE Position_uslugi_site = '".$pos."' AND Lng_uslugi_site = 'ru'";
    if (mysqli_query($link, $sql)) {
        $ru=true;
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }

    $title=str_replace("'","\'",$_POST['title_en']);
    $type=str_replace("'","\'",$_POST['btn_en']);
    $opisanie=str_replace("'","\'",$_POST['opisanie_en']);
    $srok=str_replace("'","\'",$_POST['srok_en']);
    $sql="UPDATE uslugi_site SET Title_uslugi_site = '".$title."', Type_uslugi_site = '".$type."', Opisanie_uslugi_site = '".$opisanie."', Srok_uslugi_site = '".$srok."' WHERE Position_uslugi_site = '".$pos."' AND Lng_uslugi_site = 'en'";
    if (mysqli_query($link, $sql)) {
        $en=true;
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }

    $title=str_replace("'","\'",$_POST['title_kz']);
    $type=str_replace("'","\'",$_POST['btn_kz']);
    $opisanie=str_replace("'","\'",$_POST['opisanie_kz']);
    $srok=str_replace("'","\'",$_POST['srok_kz']);
    $sql="UPDATE uslugi_site SET Title_uslugi_site = '".$title."', Type_uslugi_site = '".$type."', Opisanie_uslugi_site = '".$opisanie."', Srok_uslugi_site = '".$srok."' WHERE Position_uslugi_site = '".$pos."' AND Lng_uslugi_site = 'kz'";
    if (mysqli_query($link, $sql)) {
        $kz=true;
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }
    if($ru && $en && $kz)
    {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
    }
    
}

function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}

function new_project($link)
{
    $pos=$_POST['pos'];
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $id=generate_string($permitted_chars, 16);
    $redirect_url = "/admin/admin.php?str=setImgNewProject&pos=".$id."&new=1";
    $ru=false;
    $en=false;
    $kz=false;

    $check = can_upload($_FILES['newproj']);
    $name='';
    if ($check === true) {
        // загружаем изображение на сервер
        $name = make_upload($_FILES['newproj']);
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }

    $title=str_replace("'","\'",$_POST['title_ru']);
    $type=str_replace("'","\'",$_POST['btn_ru']);
    $type_proj =str_replace("'","\'",$_POST['type_ru']);
    $opisanie=str_replace("'","\'",$_POST['opisanie_ru']);
    $srok=str_replace("'","\'",$_POST['srok_ru']);
    $prioritet = $_POST['prioritet_ru'];
    $sql = "INSERT INTO `project_site` (id_project_site, uk_project_site, Prioritet_project_site, Title_project_site, Img_project_site, Type_project_site, Lng_project_site, id_uslugi_site, Opisanie_project_site, Srok_project_site) VALUES (NULL, '".$id."', '".$prioritet."', '".$title."', '".$name."', '".$type_proj."', 'ru', '".$type."', '".$opisanie."', '".$srok."')";
    if (mysqli_query($link, $sql)) {
        $ru=true;
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }

    $title=str_replace("'","\'",$_POST['title_en']);
    $type=str_replace("'","\'",$_POST['btn_en']);
    $type_proj =str_replace("'","\'",$_POST['type_en']);
    $opisanie=str_replace("'","\'",$_POST['opisanie_en']);
    $srok=str_replace("'","\'",$_POST['srok_en']);
    $prioritet = $_POST['prioritet_en'];
    $sql = "INSERT INTO `project_site` (id_project_site, uk_project_site, Prioritet_project_site, Title_project_site, Img_project_site, Type_project_site, Lng_project_site, id_uslugi_site, Opisanie_project_site, Srok_project_site) VALUES (NULL, '".$id."', '".$prioritet."', '".$title."', '".$name."', '".$type_proj."', 'en', '".$type."', '".$opisanie."', '".$srok."')";
    if (mysqli_query($link, $sql)) {
        $en=true;
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }

    $title=str_replace("'","\'",$_POST['title_kz']);
    $type=str_replace("'","\'",$_POST['btn_kz']);
    $type_proj =str_replace("'","\'",$_POST['type_kz']);
    $opisanie=str_replace("'","\'",$_POST['opisanie_kz']);
    $srok=str_replace("'","\'",$_POST['srok_kz']);
    $prioritet = $_POST['prioritet_kz'];
    $sql = "INSERT INTO `project_site` (id_project_site, uk_project_site, Prioritet_project_site, Title_project_site, Img_project_site, Type_project_site, Lng_project_site, id_uslugi_site, Opisanie_project_site, Srok_project_site) VALUES (NULL, '".$id."', '".$prioritet."', '".$title."', '".$name."', '".$type_proj."', 'kz', '".$type."', '".$opisanie."', '".$srok."')";
    if (mysqli_query($link, $sql)) {
        $kz=true;
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }
    if($ru && $en && $kz)
    {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
    }
    
}

function new_edit($link)
{
    $col = (int)$_POST['kol'];
    if ($col <= 4) {
        $pos = $_POST['pos'];
        $col = $col + 1;
        $redirect_url = "/admin/admin.php?str=newEditions&pos=" . $pos . "&new=" . (string)$col;
        $ru = false;
        $en = false;
        $kz = false;

        $check = can_upload($_FILES['newedit']);
        $name = '';
        if ($check === true) {
            // загружаем изображение на сервер
            $name = make_upload($_FILES['newedit']);
        } else {
            // выводим сообщение об ошибке
            echo "<strong>$check</strong>";
        }

        $title = str_replace("'", "\'", $_POST['title_ru']);
        $opisanie = str_replace("'", "\'", $_POST['opisanie_ru']);

        $sql = "INSERT INTO `more_project_site` (id_more_project_site, Title_project_site, Title_more_project_site, Img_more_project_site, Opisanie_more_project_site, Lng_more_project_site) VALUES (NULL, '" . $pos . "', '" . $title . "', '" . $name . "', '" . $opisanie . "', 'ru')";
        if (mysqli_query($link, $sql)) {
            $ru = true;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }

        $title = str_replace("'", "\'", $_POST['title_en']);
        $opisanie = str_replace("'", "\'", $_POST['opisanie_en']);
        $sql = "INSERT INTO `more_project_site` (id_more_project_site, Title_project_site, Title_more_project_site, Img_more_project_site, Opisanie_more_project_site, Lng_more_project_site) VALUES (NULL, '" . $pos . "', '" . $title . "', '" . $name . "', '" . $opisanie . "', 'en')";
        if (mysqli_query($link, $sql)) {
            $en = true;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }

        $title = str_replace("'", "\'", $_POST['title_kz']);
        $opisanie = str_replace("'", "\'", $_POST['opisanie_kz']);
        $sql = "INSERT INTO `more_project_site` (id_more_project_site, Title_project_site, Title_more_project_site, Img_more_project_site, Opisanie_more_project_site, Lng_more_project_site) VALUES (NULL, '" . $pos . "', '" . $title . "', '" . $name . "', '" . $opisanie . "', 'kz')";
        if (mysqli_query($link, $sql)) {
            $kz = true;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
        if ($ru && $en && $kz) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        }
        if ($col > 4) {
            $redirect_url = "/admin/admin.php?str=newProject";
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        }
    } else {
        $redirect_url = "/admin/admin.php?str=newProject";
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
    }
}

function edit_projects($link)
{
    $pos=$_POST['pos'];
    $redirect_url = "/admin/admin.php?str=editProject&pos=".$pos;
    $ru=false;
    $en=false;
    $kz=false;

    $title=str_replace("'","\'",$_POST['title_ru']);
    $type=str_replace("'","\'",$_POST['btn_ru']);
    $type_proj =str_replace("'","\'",$_POST['type_ru']);
    $opisanie=str_replace("'","\'",$_POST['opisanie_ru']);
    $srok=str_replace("'","\'",$_POST['srok_ru']);
    $prioritet = $_POST['prioritet_ru'];
    $sql = "UPDATE `project_site` SET `Prioritet_project_site` = '".$prioritet."', `Title_project_site` = '".$title."', `Type_project_site` = '".$type_proj."', `Opisanie_project_site` = '".$opisanie."', `Srok_project_site` = '".$srok."' WHERE uk_project_site = '".$pos."' and `Lng_project_site` = 'ru'";
    if (mysqli_query($link, $sql)) {
        $ru=true;
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }

    $title=str_replace("'","\'",$_POST['title_en']);
    $type=str_replace("'","\'",$_POST['btn_en']);
    $type_proj =str_replace("'","\'",$_POST['type_en']);
    $opisanie=str_replace("'","\'",$_POST['opisanie_en']);
    $srok=str_replace("'","\'",$_POST['srok_en']);
    $prioritet = $_POST['prioritet_en'];
    $sql = "UPDATE `project_site` SET `Prioritet_project_site` = '".$prioritet."', `Title_project_site` = '".$title."', `Type_project_site` = '".$type_proj."', `Opisanie_project_site` = '".$opisanie."', `Srok_project_site` = '".$srok."' WHERE uk_project_site = '".$pos."' and `Lng_project_site` = 'en'";
    if (mysqli_query($link, $sql)) {
        $en=true;
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }

    $title=str_replace("'","\'",$_POST['title_kz']);
    $type=str_replace("'","\'",$_POST['btn_kz']);
    $type_proj =str_replace("'","\'",$_POST['type_kz']);
    $opisanie=str_replace("'","\'",$_POST['opisanie_kz']);
    $srok=str_replace("'","\'",$_POST['srok_kz']);
    $prioritet = $_POST['prioritet_kz'];
    $sql = "UPDATE `project_site` SET `Prioritet_project_site` = '".$prioritet."', `Title_project_site` = '".$title."', `Type_project_site` = '".$type_proj."', `Opisanie_project_site` = '".$opisanie."', `Srok_project_site` = '".$srok."' WHERE uk_project_site = '".$pos."' and `Lng_project_site` = 'kz'";
    if (mysqli_query($link, $sql)) {
        $kz=true;
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }
    if($ru && $en && $kz)
    {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
    }
}

function edit_edit($link)
{
    $col = (int)$_POST['kol'];
        $pos = $_POST['pos'];
        $dop = $_POST['dop'];
        $col = $col + 1;
        $redirect_url = "/admin/admin.php?str=editEditions&pos=" . $pos . "&dop=" . (string)$dop;
        $ru = false;
        $en = false;
        $kz = false;

        $title = str_replace("'", "\'", $_POST['title_ru']);
        $opisanie = str_replace("'", "\'", $_POST['opisanie_ru']);

        $sql = "UPDATE `more_project_site` SET `Title_more_project_site` = '".$title."', `Opisanie_more_project_site` = '".$opisanie."' WHERE `Title_project_site` = '".$pos."' AND `uk_more_project_site` = '".$dop."' AND `Lng_more_project_site` = 'ru'";
        if (mysqli_query($link, $sql)) {
            $ru = true;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }

        $title = str_replace("'", "\'", $_POST['title_en']);
        $opisanie = str_replace("'", "\'", $_POST['opisanie_en']);
        $sql = "UPDATE `more_project_site` SET `Title_more_project_site` = '".$title."', `Opisanie_more_project_site` = '".$opisanie."' WHERE `Title_project_site` = '".$pos."' AND `uk_more_project_site` = '".$dop."' AND `Lng_more_project_site` = 'en'";
        if (mysqli_query($link, $sql)) {
            $en = true;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }

        $title = str_replace("'", "\'", $_POST['title_kz']);
        $opisanie = str_replace("'", "\'", $_POST['opisanie_kz']);
        $sql = "UPDATE `more_project_site` SET `Title_more_project_site` = '".$title."', `Opisanie_more_project_site` = '".$opisanie."' WHERE `Title_project_site` = '".$pos."' AND `uk_more_project_site` = '".$dop."' AND `Lng_more_project_site` = 'kz'";
        if (mysqli_query($link, $sql)) {
            $kz = true;
        } else {
            echo ($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
        if ($ru && $en && $kz) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
        }
        
}

function new_news($link)
{
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $id = generate_string($permitted_chars, 16);
    $redirect_url = "/admin/admin.php?str=listNews";
    $ru = false;
    $en = false;
    $kz = false;

    $title = str_replace("'", "\'", $_POST['title_ru']);
    $opisanie = str_replace("'", "\'", $_POST['opisanie_ru']);

    /*$sql = "UPDATE `more_project_site` SET `Title_more_project_site` = '" . $title . "', `Opisanie_more_project_site` = '" . $opisanie . "' WHERE `Title_project_site` = '" . $pos . "' AND `uk_more_project_site` = '" . $dop . "' AND `Lng_more_project_site` = 'ru'";
    if (mysqli_query($link, $sql)) {
        $ru = true;
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }

    if ($ru && $en && $kz) {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
    }*/
}
?>