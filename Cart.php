<?php
class Cart{

    // this array will contain all cart items I am storing using associative array
    // product id => CartItem

    public $cart = [];

    // this function search by id if product exist in the cart and return the id
    public function searchCart(int $id){
        return $this->cart[$id] ?? null;
    } 
    public function addCartItem(CartItem $cartItem){
        $productId = $cartItem->product->id;
        $this->cart[$productId] = $cartItem;
    }
}