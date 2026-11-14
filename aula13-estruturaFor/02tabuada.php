<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $num = $_GET["num"] ?? 1;
        for ($i = 0; $i <= 10; $i++) {
            echo "<br/>$num x $i = ". $num * $i;
        }
    ?>
    <br/>
    <a href="02exercicio.php">Voltar</a>
</body>
</html>