<?php
/**
 * Created by hh.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 2:20
 */

$config['smtp_username'] = 'noreplay@.ru';  //Смените на имя своего почтового ящика.
$config['smtp_port'] = '25'; // Порт работы. Не меняйте, если не уверены.
$config['smtp_host'] = '14.88.143.1488';  //сервер для отправки почты
$config['smtp_password'] = '88888888888';  //Измените пароль
$config['smtp_debug'] = true;  //Если Вы хотите видеть сообщения ошибок, укажите true вместо false
$config['smtp_charset'] = 'UTF-8';    //кодировка сообщений. (или UTF-8, итд)
$config['smtp_from'] = 'Образ'; //Ваше имя - или имя Вашего сайта. Будет показывать при прочтении в поле "От кого"
function smtpmail($mail_to, $subject, $message, $headers = '')
{
    global $config;
    $SEND = "Date: " . date("D, d M Y H:i:s") . " UT\r\n";
    $SEND .= 'Subject: =?' . $config['smtp_charset'] . '?B?' . base64_encode($subject) . "=?=\r\n";
    if ($headers) $SEND .= $headers . "\r\n\r\n";
    else {
        $SEND .= "Reply-To: " . $config['smtp_username'] . "\r\n";
        $SEND .= "MIME-Version: 1.0\r\n";
        $SEND .= "Content-Type: text/plain; charset=\"" . $config['smtp_charset'] . "\"\r\n";
        $SEND .= "Content-Transfer-Encoding: 8bit\r\n";
        $SEND .= "From: \"" . $config['smtp_from'] . "\" <" . $config['smtp_username'] . ">\r\n";
        $SEND .= "To: $mail_to <$mail_to>\r\n";
        $SEND .= "X-Priority: 3\r\n\r\n";
    }
    $SEND .= $message . "\r\n";
    if (!$socket = fsockopen($config['smtp_host'], $config['smtp_port'], $errno, $errstr, 30)) {
        if ($config['smtp_debug']) echo $errno . "<br>" . $errstr;
        return false;
    }

    if (!server_parse($socket, "220", __LINE__)) return false;

    fputs($socket, "HELO " . $config['smtp_host'] . "\r\n");
    if (!server_parse($socket, "250", __LINE__)) {
        if ($config['smtp_debug']) echo '<p>Не могу отправить HELO!</p>';
        fclose($socket);
        return false;
    }
    fputs($socket, "AUTH LOGIN\r\n");
    if (!server_parse($socket, "334", __LINE__)) {
        if ($config['smtp_debug']) echo '<p>Не могу найти ответ на запрос авторизаци.</p>';
        fclose($socket);
        return false;
    }
    fputs($socket, base64_encode($config['smtp_username']) . "\r\n");
    if (!server_parse($socket, "334", __LINE__)) {
        if ($config['smtp_debug']) echo '<p>Логин авторизации не был принят сервером!</p>';
        fclose($socket);
        return false;
    }
    fputs($socket, base64_encode($config['smtp_password']) . "\r\n");
    if (!server_parse($socket, "235", __LINE__)) {
        if ($config['smtp_debug']) echo '<p>Пароль не был принят сервером как верный! Ошибка авторизации!</p>';
        fclose($socket);
        return false;
    }
    fputs($socket, "MAIL FROM: <" . $config['smtp_username'] . ">\r\n");
    if (!server_parse($socket, "250", __LINE__)) {
        if ($config['smtp_debug']) echo '<p>Не могу отправить комманду MAIL FROM: </p>';
        fclose($socket);
        return false;
    }
    fputs($socket, "RCPT TO: <" . $mail_to . ">\r\n");

    if (!server_parse($socket, "250", __LINE__)) {
        if ($config['smtp_debug']) echo '<p>Не могу отправить комманду RCPT TO: </p>';
        fclose($socket);
        return false;
    }
    fputs($socket, "DATA\r\n");

    if (!server_parse($socket, "354", __LINE__)) {
        if ($config['smtp_debug']) echo '<p>Не могу отправить комманду DATA</p>';
        fclose($socket);
        return false;
    }
    fputs($socket, $SEND . "\r\n.\r\n");

    if (!server_parse($socket, "250", __LINE__)) {
        if ($config['smtp_debug']) echo '<p>Не смог отправить тело письма. Письмо не было отправленно!</p>';
        fclose($socket);
        return false;
    }
    fputs($socket, "QUIT\r\n");
    fclose($socket);
    return TRUE;
}

function server_parse($socket, $response, $line = __LINE__)
{
    global $config;
    while (@substr($server_response, 3, 1) != ' ') {
        if (!($server_response = fgets($socket, 256))) {
            if ($config['smtp_debug']) echo "<p>Проблемы с отправкой почты!</p>$response<br>$line<br>";
            return false;
        }
    }
    if (!(substr($server_response, 0, 3) == $response)) {
        if ($config['smtp_debug']) echo "<p>Проблемы с отправкой почты!</p>$response<br>$line<br>";
        return false;
    }
    return true;
}


$message = '<b>Документы к заказу #' . $iid . ' :   </b><br><br>';
$message .= 'текст';

//$jhgdsjg ='From:  мыло'. "\r\n";

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset="UTF-8"' . "\r\n";
$headers .= $jhgdsjg;
smtpmail('2222@phcm.ru', 'Тема письма', $message, $headers);