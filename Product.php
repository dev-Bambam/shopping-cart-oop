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
    public function addToCart(){
        $cart = new Cart();
        $cartItem = null;

        // search cart if product exist, if it exist increase the quantity and if not create a new cart item
        if($cartItem = $cart->searchCart($this->id)){
            $cart->increaseQuantity($this->id);
        } else {
            $cartItem = new CartItem($this, 2);
            $cart->addCartItem($cartItem);
        }
        return $cartItem;
    }
}
        