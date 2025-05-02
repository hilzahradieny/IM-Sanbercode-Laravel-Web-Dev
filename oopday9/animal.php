<?php

class parent_Animals{
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($animals_name){
        $this->name=$animals_name;

    }
}

?>