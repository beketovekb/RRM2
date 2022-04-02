<?php
require_once 'functions.php';
require_once 'database.php';

switch($_GET['type'])
{
    case 'proj':
        drop_project($link);
        break; 
    case 'opis':
        drop_opisanie($link);
    break;
    case 'imgproj':
        drop_img($link);
        break;
    case 'part':
        drop_partner($link);
        break;
}


function drop_project($link)
{
    $pos = $_GET['pos'];
    $sql = "DELETE FROM `project_site` WHERE  uk_project_site= '".$pos."'";
    if (mysqli_query($link, $sql)) {
        $redirect_url = "/admin/admin.php?str=spisokProject";
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }
}
function drop_opisanie($link)
{
    $pos = $_GET['pos'];
    $sql = "DELETE FROM `more_project_site` WHERE  	Title_project_site= '".$pos."'";
    if (mysqli_query($link, $sql)) {
        $redirect_url = "/admin/admin.php?str=editProject&pos=".$pos;
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }
}

function drop_img($link)
{
    $pos = $_GET['pos'];
    $ig = $_GET['ig'];
    $sql = "DELETE FROM `img_project` WHERE  uk_project_site = '".$pos."' AND Url_img_project = '".$ig."'";
    if (mysqli_query($link, $sql)) {
        $redirect_url = "/admin/admin.php?str=editProject&pos=".$pos;
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }
}
function drop_partner($link)
{
    $pos = $_GET['pos'];
    $sql = "DELETE FROM `partners` WHERE  id_partners = '".$pos."'";
    if (mysqli_query($link, $sql)) {
        $redirect_url = "/admin/admin.php?str=listpartner";
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
    } else {
        echo ($sql);
        echo "Ошибка: " . mysqli_error($link);
    }
}
?>