<?php
function encode($unencoded, $key)
{//Шифруем
    $string = base64_encode($unencoded);//Переводим в base64

    $arr = array();//Это массив
    $x = 0;
    while ($x++ < strlen($string)) {//Цикл
        $arr[$x - 1] = md5(md5($key . $string[$x - 1]) . $key);//Почти чистый md5
        $newstr = $newstr . $arr[$x - 1][3] . $arr[$x - 1][6] . $arr[$x - 1][1] . $arr[$x - 1][2];//Склеиваем символы
    }
    return $newstr;//Вертаем строку
}

function decode($encoded, $key)
{//расшифровываем
    $strofsym = 'qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM=';//Символы, с которых состоит base64-ключ
    $x = 0;
    while ($x++ <= strlen($strofsym)) {//Цикл
        $tmp = md5(md5($key . $strofsym[$x - 1]) . $key);//Хеш, который соответствует символу, на который его заменят.
        $encoded = str_replace($tmp[3] . $tmp[6] . $tmp[1] . $tmp[2], $strofsym[$x - 1], $encoded);//Заменяем №3,6,1,2 из хеша на символ
    }
    return base64_decode($encoded);//Вертаем расшифрованную строку
}