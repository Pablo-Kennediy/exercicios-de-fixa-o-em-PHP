<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon">
    <title>RESULTADO</title>
</head>

<body>
    <main>
        <h1>Analizador de Número Real</h1>
        <?php
        $num = $_REQUEST["n"] ?? 0;

        echo "<p>Analizando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuário:</p>";

        $int = (int) $num;
        $fra = $num - $int;

        echo "<ul><li> A parte inteira do é <strong>" . number_format($int, 0, ",", ".") . "</strong></li><ul>";
        echo "<li> A parte fracionária do numero é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li><ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>