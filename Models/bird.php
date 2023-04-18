<?php
require_once 'Product.php';

class Bird extends Product {
    public $race;
    public $size;

    public function __construct($name, $description, $price, $race, $size) {
        parent::__construct($name, $description, $price, 'Bird');
        $this->race = $race;
        $this->size = $size;
    }

    public function sprint() {
        echo "<div>";
        echo "<h2>" . $this->name . "</h2>";
        echo "<p>Categoria: " . $this->category . "</p>";
        echo "<p>" . $this->description . "</p>";
        echo "<p>Razza: " . $this->race . "</p>";
        echo "<p>Taglia: " . $this->size . "</p>";
        echo "<p>Prezzo: " . $this->price . " euro</p>";
        echo "</div>";
    }
}