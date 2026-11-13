<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>
    <?php
    $n = $_GET["val"] ?? 1;
    echo "<h1>Calculando o fatorial de $n</h1>";

    $c = $n;
    $fat = 1;

    do {
        $fat = $fat * $c;
        $c--;
    } while ($c >= 1);

    echo "<h3>$n ! = $fat</h3>";
    
    ?>
    <br>
    <a href="03fatorial.html">Voltar</a>
</body>

</html>