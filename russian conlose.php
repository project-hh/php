<?php
// КОДИРОВКА В КОТОРОЙ НАПИСАН СКРИПТ
ini_set('default_charset','UTF-8');
mb_internal_encoding('UTF-8'); 

// ВЫВОДИТЬ НА КОНСОЛЬ
mb_http_output('IBM866');
ob_start("mb_output_handler"); 


// ДВОЙНАЯ ПЕРЕКОДИРОВКА . ТАК КАК ТУТ ОНА НЕПРАВИЛЬНО РАЗОБРАНА PHP
$a = iconv('IBM866','UTF-8',iconv('CP1251','IBM866',$argv[1]));

// РУССКИЕ АРГУМЕНТЫ
echo "\nпроверка: ".$a;
