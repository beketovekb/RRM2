<?php
require_once 'functions.php';
require_once 'database.php';

switch($_GET['type'])
{
    case 'proj':
        drop_project($link);
        break; 
    case 'opis':
    drop_project($link);
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
?>