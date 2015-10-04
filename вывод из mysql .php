<?php

$query = "SELECT * FROM  `php` ORDER BY  `php`.`id` DESC LIMIT 0 , 1";
$res = mysql_query( $query );
while ( $item = mysql_fetch_array( $res ) )
{ echo $item['id'];}

///



?>
