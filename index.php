<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    <h1>PHP POO - exemplo 3</h1>
    <hr>
    <ul>
        <li>Acesso direto a propriedades</li>
        <li>Atribuição de dados e leitura</li>
    </ul>

    <?php
    // importando a classe
    require_once "src/Cliente.php";

    // criação dos objetos
    $clienteA = new cliente;
    $clienteB = new cliente;

    // atribuindo dados as propriedades do objeto

    $clienteA-> nome = "tiago";
    $clienteA-> email = "tiago@gmail.com";
    $clienteA-> telefones = ["11-2135-0300","11-97777-5555"];

    $clienteB-> nome = "bernardo";
    $clienteB-> email = "bernardo@hotmail.com";
    $clienteB-> telefones = array("11-98888-5555");
    ?>

    <h2>dados dos objetos (leitura)</h2>
    <h3> <?=$clienteA->nome ?></h3>
    <p>Email: <?=$clienteA->email ?> </p>
    <p>Telefones: <?=implode(", ",$clienteA->telefones) ?></p>
    <p>Senha: <?=$clienteA->senha?></p>

    <h3> <?=$clienteB->nome ?> </h3>
    <p><?=$clienteB->email ?></p>
    <p>Telefones: <?=implode(",",$clienteB->telefones)?></p>

    <h2>Chamando o metodo exebirDados</h2>
    <?= $clienteA->exibirDados() ?>
    <?= $clienteB->exibirDados() ?>

    <pre> <?=var_dump($clienteA, $clienteB)?> </pre>
    
</body>
</html>