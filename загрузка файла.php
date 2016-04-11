<?php
function upload_file($file)
{
if ($file['name'] == '')
{
echo 'Файл не выбран!';
return;
}
if(copy($file['tmp_name'], 'img/'.$file['name']))
echo 'Файл успешно загружен';
else
echo 'Ошибка загрузки файла';
}
?>
