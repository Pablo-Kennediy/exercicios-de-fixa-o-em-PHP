<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon">
    <title>Desafio PHP</title>
</head>

<body>
    <main>
        <picture style="display: flex;"><img src="static/aleatorio.png" style="display: block; margin: auto; width: 125px;"><h1>Trabalhando com números aleatórios</h1></picture>
        <?php
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);
        echo "<p>Gerando um número aleatorio entre $min e $max... <br>O valor gerado foi <strong>$num</strong></p>"
            ?>
            <button onclick="javacript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>

</html>