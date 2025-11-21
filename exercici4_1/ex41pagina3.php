<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endevina el nombre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f6fb;
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
        form {
            margin-top: 18px;
            margin-bottom: 10px;
        }
        label {
            font-size: 18px;
            margin-bottom: 12px;
            display: block;
        }
        input[type="number"] {
            width: 60%;
            padding: 7px 10px;
            font-size: 17px;
            border-radius: 5px;
            border: 1px solid #bdbbdd;
            margin: 10px 0 18px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 28px;
            background-color: #644eec;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(100,78,236,0.13);
            transition: background 0.2s;
        }
        input[type="submit"]:hover {
            background-color: #4736cc;
        }

        p, .message, .hint {
            font-size: 18px;
            margin: 18px 0 18px 0;
        }

        .success {
            color: #24b855;
            font-weight: bold;
        }
        .hint {
            color: #1b78b6;
        }
        .error {
            color: #ee3344;
        }
        a {
            color: #4736cc;
            text-decoration: none;
            margin-top: 12px;
            display: inline-block;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>ENDEVINA EL NOMBRE</h1>

    <?php
    if (!isset($_SESSION['ocult'])) {
        echo "<p class='error'>No s'ha registrat cap nombre ocult. <a href='ex41pagina1.php'>Torna a iniciar</a></p>";
    } else {
        if (!isset($_POST['endevina'])) {
            // No s'ha enviat la dada “endevina”: mostra formulari
            ?>
            <form method="post" action="">
                <label for="endevina">Introdueix un número:</label>
                <input type="number" name="endevina" id="endevina" required>
                <input type="submit" value="Endevinar">
            </form>
            <?php
        } else {
            $ocult = intval($_SESSION['ocult']);
            $endevina = intval($_POST['endevina']);
            if ($endevina == $ocult) {
                echo "<p class='success'>Enhorabona! Has endevinat el nombre ocult: <strong>$ocult</strong></p>";
                echo '<a href="ex41pagina1.php">Tornar a jugar</a>';
                // Potser vols esborrar la sessió:
                // session_destroy();
            } else {
                if ($endevina < $ocult) {
                    echo "<p class='hint'>El nombre ocult és <strong>més gran</strong> que $endevina.</p>";
                } else {
                    echo "<p class='hint'>El nombre ocult és <strong>més petit</strong> que $endevina.</p>";
                }
                // Torna a mostrar el formulari
                ?>
                <form method="post" action="">
                    <label for="endevina">Introdueix un número:</label>
                    <input type="number" name="endevina" id="endevina" required>
                    <input type="submit" value="Endevinar">
                </form>
                <?php
            }
        }
    }
    ?>
    </div>
</body>
</html>