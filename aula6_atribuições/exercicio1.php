<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php 
    $preco = $_GET['p'];
    echo "<h3>O preço do produto é R$ ".number_format($preco, 2, ',', '.')."</h3>";
    $preco *= 0.9; 
    echo "<br>O preço do produto com 10% de desconto é R$ ".number_format($preco, 2, ',', '.');
    ?>
</body>
</html>