<?php
class Product
{
    public $id;
    public $price;
    public $name;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}
        