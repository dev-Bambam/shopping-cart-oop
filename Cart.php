class Cart implements JsonSerializable{
    public $cart = [];

    public function searchCart(int $id) {
        return $this->cart[$id] ?? null;
    }

    public function addCartItem(CartItem $cartItem) {
        $productId = $cartItem->product->id;
        $this->cart[$productId] = $cartItem;
    }

    // Method to specify data for JSON serialization
    public function jsonSerialize() {
        return [
            'cart' => array_map(function($cartItem) {
                return [
                    'product' => $cartItem->product,
                    'quantity' => $cartItem->quantity
                ];
            }, $this->cart)
        ];
    }
}
