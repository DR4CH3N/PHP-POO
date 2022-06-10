<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP POO - exemplo 5</h1>
    <hr>
    <ul>
        <li>herança</li>
        <li>Classe abstrata (não pode ser instanciada)</li>
    </ul>

    <?php
    // importando a classe
    require_once "src/pessoaFisica.php"; // subclasse
    require_once "src/PessoaJuridica.php"; // subclasse

    $clientePF = new PessoaFisica;
    $clientePF->setNome('Tiago');
    $clientePF->setIdade(25);
    $clientePF->setSenha("Tiago123");
    $clientePF->setCpf('123.456.789.00');
    $clientePF->setEmail('tiago@gmail.com');


    $clientePJ = new PessoaJuridica;
    $clientePJ->setNomeFantasia('qualquer coisa');
    $clientePJ->setCnpj('987.654.321.00');
    $clientePJ->setAnoFundacao(1990);
    ?>

    <pre> <?=var_dump($clientePF)?> </pre>
    <pre> <?=var_dump($clientePJ)?> </pre>

    
</body>
</html>