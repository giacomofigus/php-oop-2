<?php

require_once __DIR__ . "/Product.php";

class Game extends Product{
    protected $genre;

    public function __construct($_name, $_price, $_image, $_is_available, $_quantity, Category $_category){

        parent::__construct($_name, $_price, $_image, $_is_available, $_quantity, $_category);
    }

    public function setGenre($_genre){
        $this->genre = $_genre;
    }

    public function getGenre(){
        $this->genre;
    }
}