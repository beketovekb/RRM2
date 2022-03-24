<?php
$host = 'localhost';
$login='root';
$password = 'root';
$name_bd= 'rrm_bd';
$link = mysqli_connect($host,$login,$password,$name_bd);

if(mysqli_connect_errno())
{
    echo 'Ошибка в подключении к базе данных ('.mysqli_connect_errno().') : '.mysqli_connect_error();
    exit();
}