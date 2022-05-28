<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<?php

include 'audio/darari.mp3';
if (isset($_GET['id'])){
	$id = $_GET[id];
}
$product = mysqli_query($conn,"SELECT * FROM product WHERE id =$id");

$product= mysqli_fetch_assoc($query);

$item =[
	'id'=>$product['id'],
	'name'=>$product['name'],
	'image'=>$product['image'],
	'price '=>$product['price']
	'quantity'=>1


];


?>
</body>
</html>