<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		test
	</title>

</head>
<body>
	<form method="GET" action="index.php">
		<span class="name-of-the-game">
			Nazwa gry :
		</span>
		<input name="name-of-the-game" class="name-of-the-game-input" required>
		</input>
	</form>
</body>
</html>

<?php 
mysql_connect('localhost','localhost','')
or die('brak oplaczenia z serwerem');
mysql_set_charset('utf8',mysql_connect('localhost','localhost',''));
mysql_select_db('graushop')
or die (mysql_error());

if(isset($_GET['name-of-the-game'])){ 
    $name_of_the_game = $_GET['name-of-the-game'];
   
    echo($name_of_the_game.'<br>');
    $wynik = mysql_query("SELECT `game_name`, `minimum`, `recommended` FROM `game_database` WHERE game_name = '".$name_of_the_game."'")
     or die ('nie moza pobrac rekordow');
    $rekord=mysql_fetch_array($wynik);
   	 echo("Minimalne: ".$rekord['minimum']."<br><br>");
   	 echo("Rekomendowane: ".$rekord['recommended']);
	
  } 

?>


