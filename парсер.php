<?php
/**
 * Created by hh.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 2:20
 */

$album = file_get_contents(rtrim('https:///album/' . $i . '?sdfsdf'));
$album = str_replace("\'", "/", $album);
$obj = json_decode($album);
$label = $obj->{'label'};
echo $i . ".  " . $artist . " - " . $title . "      " . $date . "     /    " . $label . " \n ";

if (!empty($date)){

    $breake = 0;
    $result = mysql_query("INSERT INTO `php` (`id`, `artist`, `title`, `date`, `label`) VALUES ('" . $i . "', '" . $artist . "', '" . $title . "', '" . $date . "', '" . $label . "')");

    if ($result) {
        echo $i . ".  " . $artist . " - " . $title . "      " . $date . "     /    " . $label . " \n ";

        $i = $i + 1;
    }
} else {
$breake = $breake + 1;
echo $i . " \n ";
if ($breake == 305) {
    echo 'erorrrrr' . " \n ";
    die();
}
