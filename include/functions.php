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

