<?php
	// получаем данные для запроса
	list($boundary, $content) = getContent($postData, $files);
	// отправляем запрос
	$responce = file_get_contents(
		'http://digitorum.ru/system/php/Scripts/Dev/fileReceiver-php.php', 
		false, 
		stream_context_create(
			array(
				'http' => array(
					'method' => 'POST',
					'header' => 'Content-Type: multipart/form-data; boundary=' . $boundary,
					'content' => $content
				)
			)
		)
	);
	
	var_export($responce);
