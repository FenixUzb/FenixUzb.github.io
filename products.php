<?php

session_start();
if (!isset($_SESSION['id']) || empty($_REQUEST['mode'])) die;

$mysqli = new mysqli('localhost', 'root', '', 'mybase');
$response = [];
$limit = 5;
$id = +$_SESSION['id'];

if ($_REQUEST['mode'] === 'pagination' && !empty($_REQUEST['page']) && !empty($_REQUEST['type'])) {
	$status = $_REQUEST['type'] === 'added' ? 0 : 1 ;
	$page = +$_REQUEST['page'];
	$offset = 5 * ($page - 1);

	$mysqli->query("SELECT * FROM products WHERE userId=$id AND status=$status");
	$all = $mysqli->affected_rows;

	$response[0] = $all;

	$result = $mysqli->query("SELECT *  FROM products WHERE userId=$id AND status=$status ORDER BY added DESC LIMIT $limit OFFSET $offset");
	$affected = $mysqli->affected_rows;

	
	if ($affected > 0)
		for ($i = 1; $i <= $affected; $i++)
			$response[$i] = $result->fetch_assoc();

} else if ($_REQUEST['mode'] === 'order') {

	$productsId = explode(',', $_REQUEST['items']);
	$time = date('Y-m-d H:i:s');
	foreach ($productsId as $key => $value) {
		$mysqli->query("UPDATE products SET status=1, ordered='$time' WHERE productId=$value");
	}
} else if ($_REQUEST['mode'] === 'add') {

	$arr = explode(',', $_REQUEST['items']);

	$products = array_chunk($arr, 3);

	$query = 'INSERT INTO products (userId, url, amount, description) VALUES ';
	$mysqli->query("SET NAMES utf8");
	foreach ($products as $key => $product) {
		$values = '('.$id.', \''.$product[0].'\', \''.$product[1].'\', \''.$product[2].'\')';
		$mysqli->query($query.$values);
	}
}
	echo json_encode($response);
?>