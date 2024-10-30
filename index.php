<?php
require_once 'Product.php';
require_once 'CartItem.php';
require_once 'Cart.php';

$product = new Product("Samsung", 3500);
$cartItem = new CartItem($product,2);
$cartItem =$cartItem->$product->addToCart();
$cart = new Cart();

echo json_encode([
    $cart
]);