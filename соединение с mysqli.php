<?php
/**
 * Created by hh.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 2:20
 */

$mysqli = new mysqli('92.14..88', 'username', 'psw', 'bdname');
if ($mysqli->connect_errno) {
    echo 'Не удалось подключиться к MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
    die();
}
$mysqli->set_charset('utf8');


$result = $mysqli->query('SELECT * FROM  `table` ORDER BY  `id` DESC LIMIT 0 , 1');
$data = $result->fetch_assoc();
$a = $data['id'];


$data[1] = $result->fetch_all(MYSQLI_ASSOC);


$data = $result->fetch_all(MYSQLI_NUM);
$count = $result->num_rows; //кол-во

$mysqli->close();