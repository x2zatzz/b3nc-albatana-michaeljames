<?php

$file = file_get_contents('items.json');
$items = json_decode($file, true);

$id = $_POST['id'];
$product_name = $_POST['product_name'];
$image = $_POST['image'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];

$new_item = array(
	"id" => (int)$id,
	"name" => $product_name,
	"image" => 'assets/images/' . $image,
	"price" => $price,
	"description" => $description,
	"category" => $category
);

array_push($items, $new_item);

$json_file = fopen('items.json', 'w');
fwrite($json_file, json_encode($items, JSON_PRETTY_PRINT));
fclose($json_file);

header('location: ../catalog.php');