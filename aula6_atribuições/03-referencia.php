<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Referência</title>
</head>
<body>
    <?php
    $a = 3;
    $b = &$a; //A variável b recebe o valor de a, mas também recebe a referência de a.
    $b += 5; //A variável b recebe o valor de b + 5
    echo "Valor de a: $a<br>";
    echo "Valor de b: $b<br>";
    ?>
</body>
</html>