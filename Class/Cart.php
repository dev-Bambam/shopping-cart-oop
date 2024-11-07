<?php
class Cart{
    public $cart = [];

    public function searchCart($id) {
        return $this->cart[$id] ?? null;
    }
    public function addCartItem(CartItem $cartItem) {
        foreach ($cartItem->getProducts() as $product) {
            $productId = $product->getId();
            $this->cart[$productId] = $product;
        }
    }
    // remove cartItem
    public function remCartItem($id){
        unset(
            $this->cart[$id]
        );
    }
    public function getQuantity($productName = null)
    {
        if ($productName) {
            $quantity = 0;
            foreach ($this->cart as $item) {
                if ($item->getProductName() == $productName) {
                    $quantity += $item->getQuantity();
                }
            }
            return $quantity;
        } else {
            $totalQuantity = 0;
            foreach ($this->cart as $item) {
                $totalQuantity += $item->getQuantity();
            }
            return $totalQuantity;
        }
    }
}
