<?php

function clean($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    if (empty($value)) exit ("Вы не верно заполнили форму, вернитесь и заполните все поля!");
    return $value;
}

$login = $_POST['login'];
$password = clean($_POST['password']);
$email = clean($_POST['email']);
$name = clean($_POST['name']);
$surname = clean($_POST['surname']);
$homePhone = clean($_POST['homePhone']);
$mobilePhone = clean($_POST['mobilePhone']);
$city = clean($_POST['city']);
$day = clean($_POST['day']);
$month = clean($_POST['month']);
$year = clean($_POST['year']);
$address = clean($_POST['address']);

$birthDay = $year.'-'.$month.'-'.$day;

$mysqli = new mysqli("localhost", "root", "", 'mybase');

$mysqli->query("SET NAMES utf8");
$res = $mysqli->query("SELECT id FROM users WHERE login='$login' LIMIT 1");

if ($mysqli->affected_rows === 1) exit ("Данный логин уже занят, попробуйте ввести другой");

$sql = "INSERT INTO users (login, password, email, name, surname, homePhone, mobilePhone, city, birthDay, address)
VALUES ('$login', '$password', '$email', '$name', '$surname', '$homePhone', '$mobilePhone', '$city', '$birthDay', '$address')";

if ($mysqli->query($sql) === TRUE) {
	echo '<h1 class="mx-auto mt-5 text-success">На указанный email адресс отпралено сообщение, для подтверждения регистрации</h1>';
}


$subject = 'the subject';
$message = "логин $login <a href=\"youtube.com\">link</a> ";
$headers = 'From: asianwaymail@example.com' . "\r\n" .
    'Reply-To: asianwaymail@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    'Content-type: text/html';

mail($email, $subject, $message, $headers);

?>
