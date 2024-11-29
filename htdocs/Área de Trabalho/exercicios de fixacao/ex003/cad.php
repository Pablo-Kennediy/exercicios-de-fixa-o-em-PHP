<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>
            Resultado do processamento
        </h1>
    </header>
    <main>
        <?php
        $n = $_GET["nome"];
        $s = $_GET["sobrenome"];
        echo "É um prazer te conhecer, $n $s! Este é o site nosso portifolio profissional!";
        ?>
        <a href='https://pablo-kennediy.github.io/curriculo/templates/sobre.html'> Clique aqui </a> para acessar.
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>