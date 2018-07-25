<?
// FILE SEND PAGE //
//-----------------//
if (isset ($_POST['send_user'])) { // запрет прямого обращения к обработчику
	session_start();
	// Обрабатываем данные полученные с html-формы, формируем нужные переменные
		if (isset ($_POST['user_name'])) {$name = $_POST['user_name'];htmlspecialchars($name);trim ($name);$_SESSION['order_name'] = $name;}if ($name == ""){unset ($name);}
		if (isset ($_POST['user_phone'])) {$tel = $_POST['user_phone'];htmlspecialchars($tel);trim ($tel);$_SESSION['order_tel'] = $tel;}if ($tel == ""){unset ($tel);}
		if (isset ($_POST['user_mail'])) {$email = $_POST['user_mail'];htmlspecialchars($email);trim ($email);}if ($email == ""){unset ($email);}
		if (isset ($_POST['user_adres'])) {$adres = $_POST['user_adres'];htmlspecialchars($adres);trim ($adres);}if ($adres == ""){unset ($adres);}
		if (isset ($_POST['user_message'])) {$message = $_POST['user_message'];htmlspecialchars($message);trim ($message);}if ($message == ""){unset ($message);}
	// Формируем текст сообщения исходя из наличия переменных
		if(isset($name)){$string_message = "Имя покупателя: ".$name."<br>";}
		if(isset($tel)){$string_message .= "Телефон: ".$tel."<br>";}
		if(isset($email)){$string_message .= "E-mail: ".$email."<br>";}
		if(isset($adres)){$string_message .= "Адрес отправления: ".$adres."<br>";}
		if(isset($message)){$string_message .= "Сообщение клиента: ".$message."<br>";}
		$string_message .= "<br>Заказ с сайта: ".$_SERVER['HTTP_HOST']."<br>";
		$string_message .= "Время заказа: ".date("m.d.Y H:i:s")."<br>";
		$string_message .= "IP покупателя: ".$_SERVER['REMOTE_ADDR']."<br>";
		$string_message .= "Сайт реферер: ".$_SESSION['referer']."<br><br>";
		
		$subject = 'Заявка с сайта '.$_SERVER['HTTP_HOST']; // заголовок письма


		//////////// АДРЕС ПОЧТЫ ДЛЯ ПРИЕМА ЗАЯВОК ////////////
		$to = "newanycar@mail.ru"; // Ваш Электронный адрес
		///////////////////////////////////////////////////////


		$header  = 'MIME-Version: 1.0' . "\r\n";
		$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$header .= "From: <zakaz@{$_SERVER['HTTP_HOST']}> \r\n";

	//-- ОБРАБОТЧИК ФОРМЫ ЗАЯВКИ НА САЙТЕ --//
	if (isset ($tel) || isset ($email)){ // проверяем заполнение обязательного полея контакта
		$result = mail($to,$subject,$string_message,$header); // оправляем письмо с сайта
		if ($result == 'TRUE'){ // проверяем результат отправки
			header ('Location: senks_page1.php');
		}else {?><script>alert ('Сообщение с формы не отправлено!');location.replace('../');</script><?}
	}else{?><script>alert ('Не заполнены обязательные поля! Они отмечены звездочками*');location.replace('../');</script><?}
}else{?><script>location.replace('../');</script><?}
?>