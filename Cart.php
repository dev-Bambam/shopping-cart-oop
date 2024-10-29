<?php
class Cart{
    public $cart = [];

    // this function search by id if product exist in the cart and return the id
    public function searchCart(int $id){
        foreach($this->cart as $cartItem){
            if($cartItem->product->id == $id){
                return $cartItem->product->id;
            }
        }
    }
    public function addCartItem(CartItem $cartItem){
        $this->cart[] = $cartItem;
    }
}