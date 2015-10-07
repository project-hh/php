<script type="text/javascript" src="upd/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#imgLoad").hide(); // Скрываем прелоадер
});

var num = 10; //чтобы знать с какой записи вытаскивать данные

$(function() {
	$("#load div").click(function(){ // Выполняем если по кнопке кликнули
		
		$("#imgLoad").show(); // Показываем прелоадер
		
		$.ajax({
			url: "upd/upneok.php", // Обработчик
			type: "GET",       // Отправляем методом GET
			data: {"num": num},
			cache: false,			
			success: function(response){
				if(response == 0){ // Смотрим ответ от сервера и выполняем соответствующее действие
					//alert("Больше нет записей");
					$("#load div").hide();
					$("#imgLoad").hide();
				}else{
					$("#content").append(response);
					num = num + 10;
					$("#imgLoad").hide();
				}
			}
		});
	});
});
</script>

<?php

echo '<div id="load">
<div><button class="btn btn-success btn-rounded">Загрузить еще</button></div>
<img id="imgLoad" src="images/loaders/loader27.gif">
</div>';

?>
