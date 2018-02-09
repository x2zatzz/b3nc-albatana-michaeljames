<?php

$category = $_GET['cat'];

$file = file_get_contents('items.json');
$items = json_decode($file, true);

$result = array();

foreach ($items as $item) {
    if ($item['category'] === $category) {
        array_push($result, $item);
    }
}