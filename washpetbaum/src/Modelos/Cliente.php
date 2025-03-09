<?php

use WASHPETBAUM\Modelos\Endereco;
use WASHPETBAUM\Modelos\CPF;
use WASHPETBAUM\Modelos\Pessoa;

namespace WASHPETBAUM\Modelos\Cliente;



class Cliente extends Pessoa {
    public function __construct(string $nome, CPF $cpf,Endereco $endereco) {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
}
