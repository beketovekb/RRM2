<?php

function get_titles($link, $lng)
{
    $sql = "SELECT * FROM title_site WHERE Lng_title = '".$lng."'";

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
    $sql = "SELECT * FROM project_site WHERE Lng_project_site = '".$lng."' and 	Title_project_site = '".$id."'";
    
    $result = mysqli_query($link, $sql);

    $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $projects;
}