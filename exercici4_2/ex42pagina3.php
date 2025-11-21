<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Coincidències</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #0066cc;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>COINCIDÈNCIES</h1>

    <?php
    session_start();

    // Recuperar frases
    $frase1 = isset($_SESSION['frase1']) ? $_SESSION['frase1'] : ''; // Frase 1
    $frase2 = isset($_POST['frase2']) ? $_POST['frase2'] : ''; // Frase 2

    // Pasar todo a minúsculas
    $frase1 = strtolower($frase1);
    $frase2 = strtolower($frase2);

    // Dividir en palabras (separa por espacios)
    $paraules1 = explode(' ', trim($frase1));
    $paraules2 = explode(' ', trim($frase2));

    // Buscar coincidencias
    $coincidencies = array_intersect($paraules1, $paraules2);

    // Mostrar resultado
    if (count($coincidencies) > 0) {
        foreach ($coincidencies as $p) {
            echo "<p>La paraula <strong>$p</strong> està a les dues frases.</p>";
        }
    } else {
        echo "<p>No hi ha cap coincidència.</p>";
    }
    ?>

    <a href="ex42pagina1.php">Tornar a l'inici</a>
</body>
</html>
