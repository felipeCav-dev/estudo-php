<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
        $dia = isset($_GET['num']) ? $_GET['num'] : 1;
        $de = [
            1 => "Domingo",
            2 => "Segunda-feira",
            3 => "Terça-feira",
            4 => "Quarta-feira",
            5 => "Quinta-feira",
            6 => "Sexta-feira",
            7 => "Sábado"
        ];
        switch ($dia) {
            case 1:
            case 7:
                echo "Hoje é {$de[$dia]}! ";   
                echo "<br/>Não é necessário ir para a escola :)";
                break;
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Hoje é {$de[$dia]}! ";
                echo "É necessário ir para a escola :(";
        }
    ?>
    <br/>
    <a href="exercicio01.html">Voltar</a>
</body>
</html>