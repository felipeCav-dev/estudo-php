<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        for ($i = 0; $i <= 10; $i++) {
            echo "$i ";
        };

        echo "<br/>";

        for ($s = 10; $s >= 0; $s--) {
            echo "$s ";
        };

        echo "<br/>";

        for ($i = 0; $i <= 50; $i += 5) {
            echo "$i ";
        };

        echo "<br/>";

        for ($i = 20; $i >= 0; $i -= 2) {
            echo "$i ";
        }
    ?>
</body>
</html>