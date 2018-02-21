<?php
/**
 * Created by PhpStorm.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 3:01
 */

function rusdate($it)
{

    if ($it !== NULL) {
        $eventdate = date('F', strtotime($it));
        $eventday = date('j', strtotime($it));
        $eventy = date('Y', strtotime($it));
        $eventdate = str_replace(array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'), $eventdate);
        return $eventday . ' ' . $eventdate . ' ' . $eventy;
    }
}

function rustime($it)
{

    if ($it !== NULL) {
        $eventdate = date('F', strtotime($it));
        $eventday = date('j', strtotime($it));
        $eventy = date('Y', strtotime($it));
        $eventtime = date('H:i', strtotime($it));
        $eventdate = str_replace(array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('янв', 'фев', 'мар', 'апр', 'мая', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'), $eventdate);

        return $eventday . ' ' . $eventdate . ' ' . $eventy . ' в ' . $eventtime;
    }
}