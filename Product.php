<?php
class Product{
    /* todo 
    **@properties: id, price, name
    */
    public $id;
    public $price;
    public $name;
    public function __construct($name, $price, $id = null) {
        $this->name = $name;
        $this->id =$id ?? uniqid();
        $this->price = $price;
    }
    // function add to cart
    // this function will create a cart item and return it
    public function addToCart()
    {
        $cart = new Cart();
        $cartItem = new CartItem($this);
        $cart->addCartItem($cartItem);
    }
}
        