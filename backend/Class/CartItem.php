<?php
class CartItem {
    // @param:Product product, quantity;
    // @methods: increaseQuantity(), decreaseQuantity();
    private  $products = []; 

    /**
     * Constructs a CartItem with a specified product and quantity.
     *
     * Clones the given product and assigns a unique ID to each clone.
     * The clones are stored in the products array.
     *
     * @param Product $product The product to be added to the cart.
     * @param int $quantity The quantity of the product to be added. Defaults to 1.
     */
    public function __construct(Product $product, $quantity = 1)
    {
        for ($i = 0; $i < $quantity; $i++) {
            $this->products[] = clone $product;
            $this->products[count($this->products) - 1]->setId(uniqid());
        }
    }
    
    /**
     * Retrieves the products in the cart item.
     *
     * @return array An array of Product objects contained in the cart item.
     */
    public function getProducts(){
        return $this->products;
    }
    /**
     * Retrieves the name of the product contained in the cart item.
     *
     * @return string The name of the product.
     */
    public function getProductName()
    {
        return $this->products[0]->getName();
    }

    /**
     * Retrieves the quantity of the product in the cart item.
     *
     * @return int The quantity of the product in the cart item.
     */
    public function getQuantity()
    {
        return count($this->products);
    }
}