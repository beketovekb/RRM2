<?php
$host = 'localhost';
$login='p-18653_beka';
$password = '341833beka';
$name_bd= 'p-328768_rrm';
$link = mysqli_connect($host,$login,$password,$name_bd);

if(mysqli_connect_errno())
{
    echo 'Ошибка в подключении к базе данных ('.mysqli_connect_errno().') : '.mysqli_connect_error();
    exit();
}