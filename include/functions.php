<?php

function get_titles($link, $lng)
{
    $sql = "SELECT * FROM title_site WHERE Lng_title = '".$lng."'";

    $result = mysqli_query($link, $sql);

    $titles = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $titles;
}
function get_titles_admin($link)
{
    $sql = "SELECT * FROM title_site";

    $result = mysqli_query($link, $sql);

    $titles = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $titles;
}


function get_napravlenia($link, $lng)
{
    $sql = "SELECT * FROM uslugi_site WHERE Lng_uslugi_site = '".$lng."'";

    $result = mysqli_query($link, $sql);

    $napravlenia = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $napravlenia;
}

function get_more_napravlenia($link, $lng, $posi)
{
    $sql = "SELECT * FROM uslugi_site WHERE Lng_uslugi_site = '".$lng."' AND Position_uslugi_site = '".$posi."'";

    $result = mysqli_query($link, $sql);

    $napravlenia2 = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $napravlenia2;
}

function get_project($link, $lng)
{
    $sql = "SELECT * FROM project_site WHERE Lng_project_site = '".$lng."' and Prioritet_project_site = '1'";

    $result = mysqli_query($link, $sql);

    $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $projects;
}

function get_more_project($link, $lng, $id)
{
    $sql = "SELECT * FROM project_site WHERE Lng_project_site = '".$lng."' and 	id_uslugi_site = '".$id."'";

    $result = mysqli_query($link, $sql);

    $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $projects;
}


function get_more_info_project($link, $lng, $id)
{
    $sql = "SELECT * FROM project_site WHERE Lng_project_site = '".$lng."' and uk_project_site = '".$id."'";
    
    $result = mysqli_query($link, $sql);

    $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $projects;
}

function get_more_func_info_project($link, $lng, $id)
{
    $sql = "SELECT * FROM more_project_site WHERE Lng_more_project_site = '".$lng."' and Title_project_site = '".$id."'";
    
    $result = mysqli_query($link, $sql);

    $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $projects;
}

function get_img($link)
{
    $sql = "SELECT * FROM img_site";
    
    $result = mysqli_query($link, $sql);

    $urls = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $urls;
}
function get_directions($link)
{
    $sql = "SELECT * FROM uslugi_site";
    
    $result = mysqli_query($link, $sql);

    $directions = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $directions;
}
function get_direction($link, $pos)
{
    $sql = "SELECT * FROM `uslugi_site` WHERE Position_uslugi_site = '".$pos."'";
    
    $result = mysqli_query($link, $sql);

    $directions = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $directions;
}


function can_upload($file)
{
    // если имя пустое, значит файл не выбран
    if ($file['name'] == '')
        return 'Вы не выбрали файл.';

    /* если размер файла 0, значит его не пропустили настройки 
	сервера из-за того, что он слишком большой */
    if ($file['size'] == 0)
        return 'Файл слишком большой.';

    // разбиваем имя файла по точке и получаем массив
    $getMime = explode('.', $file['name']);
    // нас интересует последний элемент массива - расширение
    $mime = strtolower(end($getMime));
    // объявим массив допустимых расширений
    $types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

    // если расширение не входит в список допустимых - return
    if (!in_array($mime, $types))
        return 'Недопустимый тип файла.';

    return true;
}

function make_upload($file)
{
    copy($file['tmp_name'], '../img/' . $file['name']);
    return '../img/' . $file['name'];
}