<?php

if (!isset($_SESSION['id'])) die;
$id = +$_SESSION['id'];
$user = [
	'profile' => [],
	'added' => [],
	'ordered' => [],
	'addedRows' => 0,
	'orderedRows' => 0,
];


$mysqli = new mysqli('localhost', 'root', '', 'mybase');
$mysqli->query("SET NAMES utf8");

$mysqli->query("SELECT * FROM products WHERE userId=$id AND status=0");
$user['addedRows'] = $mysqli->affected_rows;

$mysqli->query("SELECT * FROM products WHERE userId=$id AND status=1");
$user['orderedRows'] = $mysqli->affected_rows;



$profile = $mysqli->query("SELECT * FROM users WHERE id=$id LIMIT 1");
$user['profile'] = $profile->fetch_assoc();

$added = $mysqli->query("SELECT * FROM products WHERE userId=$id AND status=0 LIMIT 5");
for ($i = 0;$row = $added->fetch_assoc(); $i++) {
	$user['added'][$i] = $row;
}

$ordered = $mysqli->query("SELECT * FROM products WHERE userId=$id AND status=1 LIMIT 5 ");
for ($i = 0;$row = $ordered->fetch_assoc(); $i++) {
	$user['ordered'][$i] = $row;
}

return $user;