<?php
class cliente {
    // propriedades (ou atributos)
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;

    // metodo construtor
    public function __construct( string $nome, string $email )
    {
        /* $this é uma variavel especial, sepre apontando para a referencia da classe atualmente manipulada. */
       $this->nome = $nome;
       $this->email = $email;
    }

}
