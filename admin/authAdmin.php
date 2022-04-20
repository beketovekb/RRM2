<?php
require_once '../include/database.php';
require_once '../include/functions.php';

$login2 = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."thisisforhabr"); // Создаем хэш из пароля

$mysql = new mysqli($host,$login,$password,$name_bd);


$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login2' AND `pass` = '$pass' AND `prava` = 'admin'");
$user = $result->fetch_assoc(); // Конвертируем в массив
if(count($user) == 0){
    header('Location: login.php?stat=erroruser');
	exit();
}
else if(count($user) == 1){
	echo "Логин или праоль введены неверно";
	exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: admin.php?str=about');

 ?>
?>