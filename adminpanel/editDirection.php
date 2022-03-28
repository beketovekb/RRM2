<?php
require_once 'functions.php';
require_once 'database.php';
$pos = $_GET['pos'];
echo($pos);
$directions = get_direction($link,$pos);
?>