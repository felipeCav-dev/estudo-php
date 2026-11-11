<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
    $n1 = (int) ($_GET['n1'] ?? 0);
    $n2 = (int) ($_GET['n2'] ?? 0);
    $incremento = (int) ($_GET['incremento'] ?? 1);

    if ($incremento <= 0) {
        echo "O incremento deve ser maior que zero.";
    } elseif ($n1 < $n2) {
        while ($n1 < $n2) {
            $n1 += $incremento;
            echo $n1 . "<br>";
        }
    } elseif ($n1 > $n2) {
        while ($n1 > $n2) {
            $n1 -= $incremento;
            echo $n1 . "<br>";
        }
    } else {
        echo "Os dois números são iguais (" . $n1 . ").";
    }
    ?>
</body>
</html>
