<?php
/**
 * Created by hh.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 2:20
 */

function generateCode($length)
{

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";

    $code = "";

    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {

        $code .= $chars[mt_rand(0, $clen)];
    }

    return $code;
}