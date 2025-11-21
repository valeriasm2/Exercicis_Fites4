<?php
session_start();

if (isset($_POST['oculto'])) {
    $_SESSION['oculto'] = $_POST['oculto'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre registrado</title>
    <style>
        body {
            background: #f6f6fb;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            background: #fff;
            max-width: 400px;
            margin: 40px auto 0 auto;
            padding: 30px 30px 20px 30px;
            border-radius: 10px;
            box-shadow: 0 6px 40px rgba(30,45,100,.13);
            text-align: center;
        }
        h1 {
            color: #644eec;
            margin-bottom: 22px;
            font-size: 2em;
        }
        a {
            display: inline-block;
            padding: 10px 28px;
            background-color: #644eec;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            text-decoration: none;
            box-shadow: 0 2px 6px rgba(100,78,236,0.13);
            transition: background 0.2s;
            margin-top: 24px;
        }
        a:hover {
            background-color: #4736cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nombre registrado</h1>

        <?php
        if (isset($_SESSION['oculto'])) {
            echo '<a href="ex41pagina3.php?valor=' . urlencode($_SESSION['oculto']) . '">Adivina</a>';
        }
        ?>
    </div>
</body>
</html>
