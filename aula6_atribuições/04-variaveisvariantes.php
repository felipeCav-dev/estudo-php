<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Variáveis</title>
</head>
<body>
    <?php
    $x = "abc";
    $$x = "def"; //A variável $abc recebe o valor "def"
    echo "O conteúdo da variável X é $x";
    echo "<br>O conteúdo da variável ABC é " . $abc;
    ?>
</body>
</html>