<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <style>
         .destaque {
            color: #990000;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
            $n = isset($_GET["n"]) ? (int)$_GET["n"] : 1;
            $multiplos = 0;

            echo "<h2>Analisando o número $n ...</h2>";
            echo "<p>Valores múltiplos: ";

            for ($i = 1; $i <= $n; $i++) {
                if ($n % $i == 0) {
                    echo "$i ";
                    $multiplos++;
                }
            }

            echo "</p>";
            echo "<p>Total de múltiplos: $multiplos</p>";
            echo "<p>Resultado: $n ";

            if ($multiplos == 2) {
                echo "<span class='destaque'>É PRIMO!</span>";
            } else {
                echo "<span class='destaque'>NÃO É PRIMO!</span>";
            }

            echo "</p>";
        ?>

</body>
</html>