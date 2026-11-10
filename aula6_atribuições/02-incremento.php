<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php 
    $atual = $_GET['aa']; //Essa linha pega o ano da url.
    echo "<h2>Estamos no ano de $atual</h2>";
    echo "O ano anterior foi ". --$atual ."<br>";
?>
</body>
</html>