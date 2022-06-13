<?php
// classes abstratas NÃO PODEM SER INSTANCIADAS ou seja, não é possivel criar um objeto/variavel a partir dessa classe.
abstract class Cliente {
    // propriedades (ou atributos)
    private string $nome;
    private string $email;
    private string $senha;
    private string $situacao = "A definir";



    
    /*metodos getters e setters*/
    public function getNome():string {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = "Cliente: ".$nome;
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

   // modificador de visibilidade
   /*   public: nenhuma restrição 
        private: restrição total (só a classe conhece os recusos dela)
        protected: restrição parcial (recursos acessados pela propria classe e pelas subclasses que a herdam)
   */
    protected function getSituacao(): string
    {
        return $this->situacao;
    }

     
    protected function setSituacao(string $situacao)
    {
        $this->situacao = $situacao;

    }
}
