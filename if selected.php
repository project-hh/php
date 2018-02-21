<?php
/**
 * Created by PhpStorm.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 3:08
 */

function ifselected($a, $b)
{
    if ($a == $b) {
        $select = ' selected';
    } else {
        $select = '';
    }
    return $select;
}