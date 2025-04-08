<?php

require_once '../app/config/db.php';
$product = $_POST;

// gestion checkbox
if(empty($product['is_sale']))
    $product['is_sale'] = 0;

if ($product['price'] === '')
    $product['price'] = null;

if ($product['sale_price'] === '')
    $product['sale_price'] = null;

if ($product['rating'] === '')
    $product['rating'] = null;

var_dump($product);
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
    :product_type)
');
$stmt->execute($product); // Paramètres nommés
