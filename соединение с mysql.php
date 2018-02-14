<?php
$mysqli = new mysqli("192.14..88", "22", "3233", "2232h");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
}
$mysqli->set_charset("utf8");


$result = $mysqli->query("SELECT * FROM  phc ORDER BY  id DESC LIMIT 0 , 1");
$data =$result->fetch_assoc();
$a = $data['id'];
....

 $data[1] = $result->fetch_all(MYSQLI_ASSOC);   
    
    
    
$data = $result->fetch_all(MYSQLI_NUM );
$count = $result->num_rows;
    
$mysqli->close();
?>
