<?php

namespace WASHPETBAUM\Modelos\Animal;
class Animal{
    private $name;
    public function __construct($name){
        $this->name = $name;
}
public function getName(){
    return $this->name;
}
}


