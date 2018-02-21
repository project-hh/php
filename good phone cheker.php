<?php
/**
 * Created by PhpStorm.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 3:08
 */

function goodphone($in)
{
    $out = preg_replace(
        '/^(\d{3})(\d{3})(\d{2})(\d{2})$/',
        '+7(\1)\2-\3-\4\5',
        (string)$in
    );

    return $out;
}