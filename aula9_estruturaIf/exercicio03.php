<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
    $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
    $media = (is_numeric($nota1) && is_numeric($nota2)) ? ((float)$nota1 + (float)$nota2) / 2 : 0;
    if ($media == 0 and $media < 5) {
        $cor = "red";
    } elseif ($media >= 5 and $media < 7) {
        $cor = "orange";
    } else {
        $cor = "green";
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <style>
        span.txt {
            color: <?php echo $cor; ?>;
        }

        p {
            font-size: 1.2em;
        }

        a {
            text-decoration: none;
            color: blue;
            margin-top: 20px;
            border: 1px solid #000000;
            padding: 5px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
    echo "<h3>A primeira nota foi $nota1 e a segunda nota foi $nota2.</h3>";
    if ($media == 0 and $media < 5) {
        echo "<p>A média entre elas é <span class='txt'>$media</span>.</p>";
        echo "<p>Infelizmente você foi <span class='txt'>reprovado</span>!</p>";
    } elseif ($media >= 5 and $media < 7) {
        echo "<p>A média entre elas é <span class='txt'>$media</span>.</p>";
        echo "<p>Cuidado, você está de <span class='txt'>recuperação</span>!</p>";
    } else {
        echo "<p>A média entre elas é <span class='txt'>$media</span>.</p>";
        echo "<p>Parabéns, você foi <span class='txt'>aprovado</span>!</p>";
    }
    ?>
    <br />
    <div>
        <a href="exercicio03.html">Voltar</a>
    </div>
</body>

</html>