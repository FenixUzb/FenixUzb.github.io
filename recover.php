<?php
if (isset($_POST['phone'])) {
	$userPhone = $_POST['phone'];
	$mysqli = new mysqli("localhost", "root", "", 'mybase');
	$result = $mysqli->query("SELECT login, password, email FROM user WHERE phone='$userPhone'");
	$rows = $mysqli->affected_rows;

	if ($rows === 1) {
		list($login, $password, $email) = $result->fetch_array();
		$header = 'From: Asianwaymail@gmail.com' . "\r\n" .
		    'Reply-To: Asianwaymail@gmail.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		$subject = 'восстановление от аккаунта ';
		$message = 'Ваш логин - ' . $login . ', пароль - ' . $password . ' от сайта AsianWay';
		mail($email, $subject, $message, $header);
	}
}