<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 6</title>
</head>
<body>
    <h1>PHP POO - exemplo 7</h1>
    <h2>Assuntos abordados</h2>
    <hr>
    <ul>
        <li>propriedades e metodos estaticos</li>
    </ul>

    <?php
    // importando a classe
    require_once "src/pessoaFisica.php"; // subclasse

    $clientePF = new PessoaFisica;
    $clientePF->setNome('Tiago');
    $clientePF->setIdade(25);
    

    // acessando e atribuindo uma propriedade estatica
    PessoaFisica::$cidade = "São paulo";

    // acessando e lendo o valor de uma propriedade estatica
    echo PessoaFisica::$cidade;
    ?>


    <h3>pessoa fisica</h3>
    <p><?=$clientePF->getNome()?></p>
    <p><?=$clientePF->getIdade()?></p>

    <p>Tipo de atendimento: <?=PessoaFisica::verificaIdade($clientePF->getIdade() )?></p>

    <p><?=PessoaFisica::verificaIdade(90)?></p>
    <p><?=PessoaFisica::verificaIdade(50)?></p>

</body>
</html>