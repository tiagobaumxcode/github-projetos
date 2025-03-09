<?php


namespace WASHPETBAUM\Modelos\Pessoa;

use WASHPETBAUM\Modelos\CPF;


class Pessoa {
     private string $nome;
     private CPF $cpf;
     
     public function __construct(string $nome, CPF $cpf) {
        $this->nome = $nome;    
        $this->cpf = $cpf;

     }





}