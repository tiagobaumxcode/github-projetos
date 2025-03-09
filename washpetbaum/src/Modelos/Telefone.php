<?php

namespace WASHPETBAUM\src\Modelos\Telefone;



class Telefone{
    private string $ddd;
    private string $numero;
    public function __construct(string $ddd, string $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }
        
    
    public function getddd(): string {
        return $this->ddd;
    }
    public function getnumero(): string {
        return $this->numero;
    }   
    public function __toString(): string {
        return "($this->ddd) $this->numero";
    }
}