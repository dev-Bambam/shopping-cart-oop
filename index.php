<?php
require_once 'Product.php';
require_once 'CartItem.php';
require_once 'Cart.php';

$cart = new Cart();
$product = new Product("Samsung", 3500,uniqid());
$cartItem = new CartItem($product,8);
$cart->addCartItem($cartItem);
print_r($cart);
