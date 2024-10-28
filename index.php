<?php
require_once 'Product.php';
require_once 'CartItem.php';
require_once 'Cart.php';

$product = new Product(1, "Samsung", 3500);
$cartItem = $product->addToCart();

// echo "number of item in cart";
// echo Cart::getTotalQuantity();
// echo "total price of items in cart";
// echo Cart::getTotalPrice();

// $cartItem = CartItem::increaseQuanity(4);
$item = new CartItem($product, 4);
echo 