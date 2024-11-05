<?php
class Cart{
    public $cart = [];

    public function searchCart($id) {
        return $this->cart[$id] ?? null;
    }
    public function addCartItem(CartItem $cartItem) {
        foreach ($cartItem->getProducts() as $product) {
            array_push($this->cart, $product);
        }
    }
    // remove cartItem
    public function remCartItem($id){
        unset(
            $this->cart[$id]
        );
    }
}
