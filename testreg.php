<?php
$password;
$login;

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }

if (isset($_POST['password'])) { $password = $_POST['password']; if ($password =='') { unset($password);} }
$mysqli = new mysqli('localhost', 'root', '', 'mybase');
$mysqli->query("SET NAMES utf8");
$result = $mysqli->query("SELECT id FROM users WHERE login='$login' AND password='$password' LIMIT 1");

if ($mysqli->affected_rows === 1) {
	session_start();
	$user = $result->fetch_assoc();
	$_SESSION['id'] = $user['id'];
}
$mysqli->close();
header('location: index.php');