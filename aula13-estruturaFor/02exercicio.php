<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <form method="get" action="02tabuada.php">
        Selecione um Número: <select name="num">
            <?php 
            for ($i = 1; $i <= 10; $i++) {
                echo "<option>$i</option>";
            }; 
            ?>
        </select>
        <br>
        <input type="submit" value="Tabuada">
    </form>
</body>
</html>