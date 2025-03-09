<?php

use WASHPETBAUM\Modelos\Endereco;
use WASHPETBAUM\Modelos\CPF;


class Cliente extends Pessoa {
    public function __construct(string $nome, CPF $cpf,Endereco $endereco) {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
}
