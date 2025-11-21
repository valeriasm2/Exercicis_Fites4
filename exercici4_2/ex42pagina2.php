<!--mostrarà
El text ENREGISTRA FRASE 2
Guardarem el text “frase1” a la variable de sessió amb la clau “frase1”.
Un formulari per introduir un camp de text, amb el name del formuari=“frase2”.
El formulari s’envia a la pàgina ex42pagina3.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        label {
            font-size: 18px;
        }
        input[type="text"] {
            width: 300px;
            padding: 8px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <h1>ENREGISTRA FRASE 2</h1>
    <form action="ex42pagina3.php" method="post">
        <label for="frase2">Introdueix la frase 2:</label>
        <input type="text" id="frase2" name="frase2" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    session_start();

    // Guardar frase1 en la sesión
    if (isset($_POST['frase1'])) { // Verificar si frase1 fue enviada
        $_SESSION['frase1'] = $_POST['frase1'];
    }
    ?>
</body>

</html>