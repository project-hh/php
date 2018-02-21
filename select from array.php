<?php
/**
 * Created by PhpStorm.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 2:55
 */

function selectfromreach($array, $select)
{
    $selected = '';
    foreach ($array as $kek => $item) {
        if ($select == $kek) {
            $wasselect = 'selected';
        } else {
            $wasselect = '';
        }
        $selected .= '<option value="' . $kek . '" ' . $wasselect . '>' . $item . '</option>';
    }
    return $selected;
}