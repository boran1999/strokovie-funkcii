<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <h2 align ="left"><font color="blue">Удаление данных</font></h2>
  <title>Test_Form</title>
 </head>
 <body bgcolor="lightblue">
	<?php
		$fp = fopen("logs/form1.txt", "r");
		$i=0;
	?>
	<form action="form.php" method="POST">
		<?php
		if ($fp) {
			while (!feof($fp)){
				$str = fgets($fp, 999);
				if(substr($str,-2,1)==1){
					$str1=substr($str,0,-2);
					echo "<input type='checkbox' name='f[]' value=".$str."><font color='blue'>".$str1."</font><br>";
				}
			}
		}
		else echo "Ошибка при открытии файла";
		fclose($fp);
		?>
	<p><input type="submit" value="Удалить"></p>
	</form>
 </body>
</html>
