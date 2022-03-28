<?php
require_once 'functions.php';
require_once 'database.php';
switch ($_POST['fun']) {
    case 'general':
        set_general();
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
        if(isset($_POST['r8']))
    {
        $redirect_url ="/admin/admin.php?str=directions";
        if(set_bd(8,9,$link))
        {
            header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
        }   
    }
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



function set_general(){
    require_once 'database.php';
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
?>