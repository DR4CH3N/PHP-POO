<?php
require_once "Cliente.php";

// classe PessoaFisica herda coisas da classe cliente (usando o extend)
class PessoaFisica extends Cliente {

    private string $cpf;
    private int $idade;

    
    public function __construct()
    {
        // toda vez que isso for criado ele vai entrar em execução automaticamente

        $this->setSituacao("normal");
    }
    


    
    public function getIdade(): int
    {
        return $this->idade;
    }

    
    public function setIdade(int $idade)
    {
        $this->idade = $idade;

        return $this;
    }

    
    public function getCpf(): string
    {
        return $this->cpf;
    }

    
    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function exibirDados() {
        echo "<h3>".$this->getNome()."</h3>";
        echo "<p>Idade: ".$this->getIdade()."</p>";
        echo "<p>Situação: ".$this->getSituacao()."</p>";
    }
}