<?php

$n1 = isset($_POST['n1']) ? (float) $_POST['n1'] : 0;
$n2 = isset($_POST['n2']) ? (float) $_POST['n2'] : 0;

$adicao = $n1 + $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;

$divisaoValida = ($n2 != 0);


if ($divisaoValida) {
    $divisao = $n1 / $n2;
    $modulo = $n1 % $n2;
}

$potencia = $n1 ** $n2;
$concatenacao = $n1 . $n2;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h1 align="center">Operações Aritméticas</h1>
        <h2 align="center">Resultados</h2>
        <hr>

        <h3>
            <?php echo "$n1 + $n2 = $adicao"; ?>
        </h3>
        <h3>
            <?php echo "$n1 - $n2 = $subtracao"; ?>
        </h3>
        <h3>
            <?php echo "$n1 × $n2 = $multiplicacao"; ?>
        </h3>
        <h3>
            <?php
                if ($divisaoValida) {
                    echo "$n1 ÷ $n2 = " . number_format($divisao, 2, ',', '.');
                    echo "<br>";
                    echo "$n1 % $n2 = " . number_format($modulo, 2, ',', '.');
                } else {
                    echo "Não há divisão por zero.";
                }
            ?>
        </h3>
        <h3>
            <?php echo "$n1 <sup>$n2</sup> = " . number_format($potencia, 2, ',', '.'); ?>
        </h3>

        <br>
        <a href="index.php" class="btn-back">Voltar</a>
    </div>
</body>

</html>