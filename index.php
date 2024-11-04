<?php
require_once 'Product.php';
require_once 'CartItem.php';
require_once 'Cart.php';

$cart = new Cart();
$product = new Product("Samsung", 3500,uniqid());
$product2 = new Product("Iphone", 4500, uniqid());
$cartItem = new CartItem($product,2);
$cartItem2 = new CartItem($product2, 1);
$cart->addCartItem($cartItem);
$cart->addCartItem($cartItem2);

print_r($cart);