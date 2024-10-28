<?php
class Product{
    /* todo 
    **@properties: id, price, name
    */
    public $id;
    public $price;
    public $name;
    public function __construct($id, $name, $price){
        $this->name = $name;
        $this->id = $id;
        $this->price = $price;
    }
    // function add to cart
    // this function will create a cart item and return it
    public  function addToCart(){
        $cartItem = new CartItem($this, 2);
        $cart = new Cart();
    }
}