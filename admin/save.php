<?php

require_once '../app/config/db.php';
$product = $_POST;

// gestion checkbox
if(empty($product['is_sale']))
    $product['is_sale'] = 0;

$sanitize = ['price', 'sale_price', 'rating', 'price_min', 'price_max'];
foreach($sanitize as $field)
    if ($product[$field] === '')
        $product[$field] = null;

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
