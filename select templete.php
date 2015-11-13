<?php


if (empty($_COOKIE["dle_skin"])) {


    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if (($lang =="ru") or ($lang =="Ru") or ($lang =="RU")){
    setcookie("dle_skin", "rus", time() + 3600);
}
}

//print_r($_COOKIE);

?>
