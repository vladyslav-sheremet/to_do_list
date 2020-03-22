<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>maksymka</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/styl.css">
</head>
<body>
	<div class="container">
	<form action="create.php" method="post">
		<input type="text" name="title" placeholder="Добавь новое задание">
		<textarea name="text" placeholder="подробное описание"></textarea>
		<input type="submit">
	</form>
	<?php
		  //Если переменная Name передана
	include('link.php');
	$result = mysqli_query($link, "SELECT * FROM `task`");
	if( mysqli_num_rows($result) == 0 ){
		echo 'К сожалению категорий нет(';
	} else
	{?>
		<ul>
			<?php 
			while (($cat = mysqli_fetch_assoc($result))) {
				$articles_amount = mysqli_query($link, "SELECT COUNT(id) AS `total_count` FROM `task` WHERE `task_category` = " . $cat['id']);
				$articles_amount_result = mysqli_fetch_assoc($articles_amount);
				echo '<li>' . $cat['title'] . ' ('. $articles_amount_result['total_count'] .')</li>';
			}
			?>
		</ul>
		<?php 
	}
	?>
	<?php
	echo '<p class="p">fgdsfgdfsgsdfgsdgdgfjkdf</p>';
	?></div>
</body>
</html>