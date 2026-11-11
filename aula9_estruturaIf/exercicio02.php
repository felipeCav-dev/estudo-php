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
    echo "Você nasceu em $ano e tem $idade anos.";
    if ($idade < 16) {
        echo "Portanto você não pode votar.";
    } elseif ($idade >= 16 and $idade < 18 or $idade > 70) {
            echo "<br/>Seu voto é opcional.";
        } else {
            echo "<br/>Seu voto é obrigatório.";
        }
    ?>
    <br />
    <a href="exercicio01.html">Voltar</a>

</body>

</html>