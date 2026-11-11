<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php 
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $media = ($n1 + $n2) / 2;
        echo "As notas foram: $n1 e $n2 <br>";
        echo "A média é: $media";
        $situacao = ($media < 6) ? "REPROVADO" : "APROVADO";
        echo "<br>O aluno está: $situacao";
    ?>
</body>
</html>