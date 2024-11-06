<?php
class CartItem {
    // @param:Product product, quantity;
    // @methods: increaseQuantity(), decreaseQuantity();
    private  $products = []; 

    public function __construct(Product $product, $quantity = 1)
    {
        for ($i = 0; $i < $quantity; $i++) {
            $this->products[] = clone $product;
            $this->products[count($this->products) - 1]->setId(uniqid());
        }
    }
    // method to get product
    public function getProducts(){
        return $this->products;
    }
}