<?php

class Gato extends Animal {
    private $nome = "";
    private $idade = 0;
    private $raca = "";
    private $dono = "";
    public function __construct(string $nome, int $idade, string $raca, string $dono) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->dono = $dono;
    }    
}
