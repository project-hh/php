<?php
/**
 * Created by PhpStorm.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 3:20
 */

function orderstatus($type)
{

    switch ($type) {
        case "0":
            $status = "Новый";
            break;
        case "1":
            $status = "В работе";
            $statusname = "purple";
            break;
        case "2":
            $status = "На согласовании";
            $statusname = "info";
            break;
        case "3":
            $status = "Отменен";
            $statusname = "danger";
            break;
        case "4":
            $status = "Готов";
            $statusname = "success";
            break;
        case "5":
            $status = "Закрыт";
            $statusname = "inverse";
            break;


    }

    $status = "<span class='label label-$statusname'>$status</span>";
    return $status;


}