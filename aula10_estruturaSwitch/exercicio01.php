<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
        $num = isset($_GET['num']) ? $_GET['num'] : 0;
        $op = isset($_GET['op']) ? $_GET['op'] : 1;
        switch ($op) {
            case 1:
                $resultado = $num * 2;
                break;
            case 2:
                $resultado = pow($num, 3);
                break;
            case 3:
                $resultado = sqrt($num);
        }
    ?>
    <a href="exercicio01.html">Voltar</a>
    <p>O resultado é: <?php echo $resultado; ?></p>
</body>
</html>