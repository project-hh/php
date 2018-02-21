<?php
/**
 * Created by PhpStorm.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 3:06
 */

//кэшируем
function datatocache($filename, $data)
{
    file_put_contents(__DIR__ . 'cache/' . $filename . '.json', json_encode($data, TRUE));
}

//читаем кэш
function readcache($filename)
{
    $data = json_decode(file_get_contents(__DIR__ . 'cache/' . $filename . '.json'), true);
    return $data;
}

//читаем кэш
function deletecache($filename)
{
    unlink(__DIR__ . 'cache/' . $filename . '.json');
}



    $cachefile = __DIR__.'cache/today.json';
    $cachetime = 250;
    if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
        $info = json_decode(file_get_contents($cachefile), true);
    }