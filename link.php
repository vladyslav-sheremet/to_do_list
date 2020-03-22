<?php
$link = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'maksymka_db');
if ($link == false) {
	echo 'Не удалось подключиться к серверу';
	echo mysqli_connect_error();
	exit();
} 
// else{
// 	echo '<p class="database">Всё работает отлично!</p><hr>';
// }
?>