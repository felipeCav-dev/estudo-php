<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $anoAtual = $_GET["aa"];
    $nasc = $_GET["an"];
    $idade = $anoAtual - $nasc;
    $voto = ($idade < 16) ? "Não vota" : ((($idade >= 16 and $idade < 18) or ($idade > 65)) ? "Voto Opcional" : "Voto Obrigatório");
    echo "Sua idade é $idade anos e sua situação eleitoral é: $voto";
    ?>
</body>

</html>