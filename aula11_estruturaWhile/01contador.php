<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
        $c = 1;
        while ($c <= 10) {
            echo "$c ";
            $c++;
        }
        echo "<br>";
        $c2 = 10;
        while ($c2 >= 1) {
            echo "$c2 ";
            $c2-= 2;    
        }
    ?>
</body>
</html>