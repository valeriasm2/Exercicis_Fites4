<!-- mostrarà
El text ENREGISTRA FRASE
Un formulari per introduir un camp de text,
amb el name del camp del formuari = “frase1”.
El formulari s’envia a la pàgina ex42pagina2.php
-->
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
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <h1>ENREGISTRA FRASE</h1>
    <form action="ex42pagina2.php" method="post">
        <label for="frase1">Introdueix la frase 1:</label>
        <input type="text" id="frase1" name="frase1" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>