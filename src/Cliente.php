<?php
// classes abstratas NÃO PODEM SER INSTANCIADAS ou seja, não é possivel criar um objeto/variavel a partir dessa classe.
abstract class Cliente {
    // propriedades (ou atributos)
    private string $nome;
    private string $email;
    private string $senha;



    
    /*metodos getters e setters*/
    public function getNome():string {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getEmail():string {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getSenha():string {
        return $this->senha;
    }

    public function setSenha(string $senha) {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }
}
