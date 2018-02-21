<?php
/**
 * Created by PhpStorm.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 2:58
 */

function clearcacheinfo($data){
    unlink(__DIR__.'cache/'.$data);
    return 1;
}