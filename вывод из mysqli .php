<?php
/**
 * Created by hh.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 2:20
 */


$result = $mysqli->query('SELECT * FROM  `table` ORDER BY  `id` DESC LIMIT 0 , 1');
$data = $result->fetch_assoc();
$a = $data['id'];


$data[1] = $result->fetch_all(MYSQLI_ASSOC);


$data = $result->fetch_all(MYSQLI_NUM);
$count = $result->num_rows; //кол-во

$mysqli->close();