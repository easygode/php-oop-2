<?php

/**
 * Product
 * Define the default product
 * 
 * @author Gaetano Frascolla
 */

class Product 
{
    private $id;
    private $name;
    private $description;
    private $category;
    private $price;
    private $image;

/**
 * __construct
 * 
 * Define the default product
 * 
 * @param int $_id
 * @param string $_name
 * @param string $_description
 * @param string $_category
 * @param int $_price
 * @param $_image
 */

    public function __construct($_id, $_name, $_description, $_category, $_price, $_image) 
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->description = $_description;
        $this->category = $_category;
        $this->price = $_price;
        $this->image = $_image;
    }

/**
 * Get ID
 * get the product identifier
 * 
 * @return int
 */

    public function get_id(){
        return $this->id;
    }

/**
 * Set ID
 * set the product ID
 * 
 * @param int $_id
 */

    public function set_id($_id){
        $this->name = $_id;
    }

    public function get_name(){
        return $this->name;
    }

/**
 * Set NAME
 * set the product NAME
 * 
 * @param string $_name
 */

    public function set_name($_name){
        $this->name = $_name;
    }

    public function get_description(){
        return $this->description;
    }

/**
 * Set DESCRIPTION
 * set the product DESCRIPTION
 * 
 * @param string $_description
 */

    public function set_description($_description){
        $this->name = $_description;
    }

    public function get_category(){
        return $this->category;
    }

    public function set_category($_category){
        $this->name = $_category;
    }

    public function get_price(){
        return $this->price;
    }

    public function set_price($_price){
        $this->name = $_price;
    }

    public function get_image(){
        return $this->image;
    }

    public function set_image($_image){
        $this->name = $_image;
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