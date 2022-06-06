<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    <h1>PHP POO - exemplo 2</h1>
    <hr>
    <ul>
        <li>Criação dos objetos</li>
        <li>uso do metodo construtor</li>
        <li>uso do <code>$this</code> para acessar as propriedades</li>
    </ul>

    <?php
    // importando a classe
    require_once "src/Cliente.php";

    // criação dos objetos
    $clienteA = new cliente('Tiago', 'tiago@gmail.com');
    $clienteB = new cliente('Jon oliva', 'savatage@msn.com');
    ?>

    <pre> <?=var_dump($clienteA, $clienteB)?> </pre>
    
</body>
</html>