<?php
/**
 * Created by hh.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 2:20
 */



$string = 'apikey|keeey||test|testtt';
$xfields = array();
$array2 = explode('||', $string);
foreach ($array2 as $str) {
    list($key, $value) = explode('|', $str);
    $xfields[$key] = $value;
}


foreach ($arr as $key => $val) {
    $str .= "\n '" . $key . "'=>'" . $val . "',";
}