<?php
include('link.php');
if (isset($_POST["title"])) {
		    //Вставляем данные, подставляя их в запрос
	$sql = mysqli_query($link, "INSERT INTO `task` (`title`, `text`) VALUES ('{$_POST['title']}', '{$_POST['text']}')");
		    //Если вставка прошла успешно
	header('Location: index.php');
	exit();
}
// 	if ($sql) {
// 		echo '<p>Данные успешно добавлены в таблицу.</p>';
// 	} else {
// 		echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
// 	}
// }