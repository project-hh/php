<?php
$connect=mysql_connect("14.88", "login", "pass");
if ( !$connect ) die ("Невозможно подключение к MySQL");
$db="xyu";
mysql_select_db ( $db ) or die ("Невозможно открыть $db");
mysql_set_charset('utf8',$connect);

....

mysql_close($connect);
?>
