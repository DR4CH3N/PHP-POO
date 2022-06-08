<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    <h1>PHP POO - exemplo 4</h1>
    <hr>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadorres de visibilidade</li>
        <li>Metodos getters e setters</li>
    </ul>

    <?php
    // importando a classe
    require_once "src/Cliente.php";

    // criação dos objetos
    $clienteA = new cliente;
    $clienteB = new cliente;

    // atribuindo dados via setters do objeto

    $clienteA->setNome("tiago");
    $clienteA->setEmail("tiago@outlook.com");
    $clienteA->setSenha("123abc");

    


    $clienteB->setNome("bernarndo");
    $clienteB->setEmail("bernardo@gmail.com");
    $clienteB->setSenha("xyz789");

    /* 
    SET significa pegar uma classe e atribuir/colocar dados a ela
    GET significa pegar uma classe e fazer com que ela seja exibida
    */
    ?>

    <h2>dados dos objetos (leitura e getters)</h2>
    <h3> <?=$clienteA->getNome() ?></h3>
    <p> <?=$clienteA->getEmail() ?> </p>
    <p> <?=$clienteA->getSenha() ?> </p>
    
    

    <h3> <?=$clienteB->getNome() ?> </h3>
    <p> <?=$clienteB->getEmail() ?> </p>
    <p> <?=$clienteB->getSenha() ?> </p>
    
    
    
    <pre> <?=var_dump($clienteA, $clienteB)?> </pre>
    
</body>
</html>