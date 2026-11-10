<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <button onclick="window.location.href='funcoesaritmeticas.php?x=8&y=3'">Funções Aritméticas</button>
    <?php 
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1 + $n2) / 2;
    echo "<h2>Valores recebidos: $n1 e $n2</h2>";
    echo "A soma vale ".($n1 + $n2);
    echo "<br>A subtração vale ".($n1 - $n2);
    echo "<br>A multiplicação vale ".($n1 * $n2);
    echo "<br>A divisão vale ".($n1 / $n2);
    echo "<br>O módulo vale ".($n1 % $n2);
    echo "<br>A média vale $m";
    ?>
</body>
</html>