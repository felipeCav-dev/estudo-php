<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php  
        $n = $_GET["number"] ?? 1;
        $mult = 0;
        $r = 0;
        do {
            $r = $n * $mult;
            echo "$n x $mult = $r <br>";
            $mult++;
            
        } while($mult <= 10);
    ?>
    <a href="04tabuada.html">Voltar</a>
</body>
</html>