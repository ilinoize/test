<!DOCTYPE html>

<html lang="ru">
<head>
	<meta charset="UTF-8″ />
	<title>Тестовое задание</title>
	<link href="css/style.css" />
</head>

<body>
	<?php
		$file = file('count.txt');
		$count = implode("", $file);
		$count++;
		$views = fopen('count.txt', 'w');
		fputs($views, $count);
		fclose($views);
	?>
	<main>
		<img src="images/1.jpg" alt="" />
		<p class="views">Количество просмотров:</p>
		<p class="views"><?php echo $count ?> </p>
	</main>
</body>

</html>