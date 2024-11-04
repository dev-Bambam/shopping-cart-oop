<?php
class Cart{
    public $cart = [];

    public function searchCart(int $id) {
        return $this->cart[$id] ?? null;
    }
    public function addCartItem(CartItem $cartItem) {
        $productId = $cartItem->product->id;
        $this->cart[$productId] = $cartItem;
    }
}
