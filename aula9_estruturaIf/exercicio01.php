<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>
    <?php
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : "1900";
    $idade = date("Y") - $ano;
    if ($idade < 18) {
        echo "Você é menor de idade, portanto não pode dirigir e nem votar.";
    } else {
        echo "Você é maior de idade, portanto pode dirigir e votar.";
    }
    ?>
    <br />
    <a href="exercicio01.html">Voltar</a>

</body>

</html>