<?php

class Product{
    public $name;
    public $price;
    public $image;
    public $is_available;
    public $quantity;

    public $category;

    public function __construct($_name, $_price, $_image, $_is_available, $_quantity, Category $_category){
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->is_available = $_is_available;
        $this->quantity = $_quantity;
        $this->category = $_category;

    }

    public function getProductDetails(){
        return "Product: $this->name, Price $this->price, Qantity: $this->quantity";
    }

    public function getIconMarkup(){
        $icon = $this->category->icon;
        return "<i class='$icon'></i>";
    }
}