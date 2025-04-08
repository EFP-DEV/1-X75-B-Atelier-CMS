<?php

var_dump($_GET);
var_dump($_POST);

$product = $_POST;

// gestion checkbox
if(empty($product['is_sale']))
    $product['is_sale'] = 0;

die;


$stmt = $pdo->prepare('INSERT INTO products (
    name, 
    price_min, 
    price_max, 
    price, 
    sale_price, 
    image, 
    is_sale, 
    rating, 
    product_type
) VALUES (
    :name, 
    :price_min, 
    :price_max, 
    :price, 
    :sale_price, 
    :image, 
    :is_sale, 
    :rating, 
    :product_type
');
$stmt->execute($product); // Paramètres nommés
