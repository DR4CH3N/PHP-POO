<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 6</title>
</head>
<body>
    <h1>PHP POO - exemplo 6</h1>
    <h2>Assuntos abordados</h2>
    <hr>
    <ul>
        <li>polimorfismo</li>
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
    $clientePJ->setNome('qualquer coisa');
    $clientePJ->setCnpj('987.654.321.00');
    $clientePJ->setAnoFundacao(1990);

    ?>

    <pre> <?=var_dump($clientePF)?> </pre>
    <pre> <?=var_dump($clientePJ)?> </pre>

    <h3>pessoa fisica</h3>
    <p><?=$clientePF->getNome()?></p>

    <h3>Pessoa juridica</h3>
    <p><?=$clientePJ->getNome()?></p>

    <hr>
    <section>
    <?=$clientePF->exibirDados()?>
    <?=$clientePJ->exibirDados()?>

    </section>
    
</body>
</html>