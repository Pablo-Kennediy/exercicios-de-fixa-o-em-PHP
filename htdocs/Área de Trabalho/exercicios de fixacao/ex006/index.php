<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon">
    <title>DIVISÃO</title>
</head>

<body>
    <?php
    // Capturando os dados do Formulario Retroalimentado
    $dividendo = $_GET['d1'] ?? 0;
    $divisor = $_GET['d2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia da divisão</h1>
<!-- Formulario que esta sendo Retroalimentado -->
        <form action="" method="get">
            <label for="d11">Dividendo</label>
            <input type="number" name="d1" id="d1" value="<?= $dividendo ?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <!-- Lista com os dados do Formulario -->
        <h2>Estrutura da Divisão</h2>
        <?php
        // Cálculos no BACK
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;

        echo "<ul>";
        echo "<li>Dividendo: $dividendo</li>";
        echo "<li>Divisor: $divisor</li>";
        echo "<li>Quociente: $quociente</li>";
        echo "<li>Resto: $resto</li>";
        echo "</ul>";
        ?>

<!-- Dados do formulario representado em tabela -->
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $quociente ?></td>
            </tr>
        </table>
    </section>
</body>

</html>