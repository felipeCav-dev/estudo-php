<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <form method="get" action="exercicio03.php">
        <?php 
        $c = 0;
        while ($c < 5) {
            $c++;
            echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0' required><br>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>