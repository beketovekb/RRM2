<?php 
require_once '../include/database.php';
require_once '../include/functions.php';
$login2 = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); // Удаляет все лишнее и записываем значение в переменную //$login
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login2) < 5 || mb_strlen($login2) > 90){
	echo "Недопустимая длина логина";
	exit();
}
else if(mb_strlen($name) < 5){
	echo "Недопустимая длина имени.";
	exit();
} // Проверяем длину имени

$pass = md5($pass."thisisforhabr"); // Создаем хэш из пароля

$mysql = new mysqli($host,$login,$password,$name_bd);

$result1 = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login2'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив
if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}
else
{
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`, `prava`)
	VALUES('$login', '$pass', '$name', 'admin')");
$mysql->close();
}


header('Location: admin.php?str=about');
 ?>