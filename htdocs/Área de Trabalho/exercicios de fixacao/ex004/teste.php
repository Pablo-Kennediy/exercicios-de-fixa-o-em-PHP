<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon">
    <title>Dólar online</title>
</head>
<body>
    <header>
        <pre>
            <?php
            $início = date("m-d--Y", strtotime("-7 days"));
            $fim  = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'10-01-2024\'&@dataFinalCotacao=\'10-08-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $dados = json_decode(file_get_contents($url), true);
        
            $cotação = $dados["value"][0]["cotacaoCompra"];        
                ?>
        </pre>
    </header>
    <section>
<?php 
             echo "<h1>A cotação foi U$ $cotação</h1>";
             ?>
    </section>
</body>
</html>