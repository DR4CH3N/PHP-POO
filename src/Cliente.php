<?php
class cliente {
    // propriedades (ou atributos)
    public string $nome;
    public string $email;
    public string $senha = "";
    public array $telefones;


    // os pontos servem para poder concatenar
    public function exibirDados() {
        echo "<h3> $this->nome </h3>";
        echo "<ul>";
        echo "<li> $this->email </li> ";
        echo "<li>". implode(',', $this->telefones). "</li>";
        echo "</ul>";
    }
}
