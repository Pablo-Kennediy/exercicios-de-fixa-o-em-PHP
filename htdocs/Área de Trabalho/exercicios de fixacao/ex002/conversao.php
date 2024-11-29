<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="static/style.css">
    <link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon"></head>

<body>
    <main>
    <picture style="display: flex;">
        <img src="static/dolar.png" style="display: block; margin: auto; width: 125px;">
         <h1>Resultado do Conversor de moedas para Dólar</h1>
    </picture>
        <?php
        // Cotação na pesquisa Google
        $cotação = 5.17;

        // Quanto tenho na carteira
        $real = $_REQUEST["din"] ?? 0;

        // Equivalência em Dólar
        $dólar = $real / $cotação;

        // Mostrar o resultado
// echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dólar, 2, ",", ".");
        
        // Formação de moedas com internacionalização !
// Biblioteca intl (Internallizantion PHP)
        
        $padrão = numfmt_create("pt-br", NumberFormatter::CURRENCY);

        echo "Seus <strong>" . numfmt_format_currency($padrão, $real, "BRL") . "</strong> equivalem a  <strong>" . numfmt_format_currency($padrão, $dólar, "USD </strong>");
        ?>

<button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>