<?php

class Product {
    public $name;
    public $description;
    public $price;
    public $category;

    public function __construct($name, $description, $price, $category) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
    }

    public function sprint() {
        echo "<div>";
        echo "<h3>" . $this->name . "</h3>";
        echo "<p>" . $this->description . "</p>";
        echo "<p>Categoria: " . $this->category . "</p>";
        echo "<p>Prezzo: " . $this->price . " euro</p>";
        echo "</div>";
    }
}