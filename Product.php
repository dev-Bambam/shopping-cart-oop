<?php
class Product{
    /* todo 
    **@properties: id, price, name
    */     
    public $id;
    public $price;
    public $name;
    public function __construct($name, $price, $id) {
        $this->name = $name;
        $this->id =$id; 
        $this->price = $price;
    }
    // method to set id
    public function setId($id){
        $this->id = $id;
    }
}
        