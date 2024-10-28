<?php
class CartItem{
    // @param:Product product, quantity;
    // @methods: increaseQuantity(), decreaseQuantity();
    public Product $product;
    public int $quantity;

    public function __construct(Product $product, $quantity){
        $this->product = $product;
        $this->quantity = $quantity;
    }
}