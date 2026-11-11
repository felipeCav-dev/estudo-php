<?php
    $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico";
    $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
    $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="03estilo.css">
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>!important;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>
</body>
</html>
