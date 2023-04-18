<?php
require_once 'Product.php';

class Fish extends Product {
    public $species;
    public $size;

    public function __construct($name, $description, $price, $species, $size) {
        parent::__construct($name, $description, $price, 'Fish');
        $this->species = $species;
        $this->size = $size;
    }

    public function sprint() {
        echo "<div>";
        echo "<h2>" . $this->name . "</h2>";
        echo "<p>Categoria: " . $this->category . "</p>";
        echo "<p>" . $this->description . "</p>";
        echo "<p>Specie: " . $this->species . "</p>";
        echo "<p>Taglia: " . $this->size . "</p>";
        echo "<p>Prezzo: " . $this->price . " euro</p>";
        echo "</div>";
    }
}