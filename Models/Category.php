<?php

class Category
{
    private $name;
    private $icon;

    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

    public function get_name(){
        return $this->name;
    }

    public function set_name($_name){
        $this->name = $_name;
    }

    public function get_icon(){
        return $this->icon;
    }

    public function set_icon($_icon){
        $this->name = $_icon;
    }

    public function get_category(){
        return $this->category;
    }

    public function set_category($_category){
        $this->name = $_category;
    }


}

