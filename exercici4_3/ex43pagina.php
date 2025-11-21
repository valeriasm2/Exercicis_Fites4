<?php
session_start();

// Inicialitza la variable de sessió si no existeix
if (!isset($_SESSION['text'])) {
    $_SESSION['text'] = '';
}

// Si s'ha clicat una lletra (passada per GET), afegeix-la a la sessió
if (isset($_GET['lletra'])) {
    // Només agafem la primera lletra per seguretat
    $lletra = substr($_GET['lletra'], 0, 1);
    $_SESSION['text'] .= $lletra;
}

// Opció per esborrar el text si es vol
if (isset($_GET['clear'])) {
    $_SESSION['text'] = '';
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Màquina d'escriure / Teclat Virtual</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f6fb;
            margin: 0;
            padding: 0;
        }
        .container {
            background: #fff;
            max-width: 500px;
            margin: 40px auto 0 auto;
            padding: 30px 30px 20px 30px;
            border-radius: 10px;
            box-shadow: 0 6px 40px rgba(30,45,100,.13);
            text-align: center;
        }
        .teclat {
            margin-top: 20px;
        }
        .teclat a {
            display: inline-block;
            margin: 6px 4px;
            padding: 14px 16px;
            background-color: #644eec;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            transition: background 0.2s;
            box-shadow: 0 2px 6px rgba(100,78,236,0.10);
        }
        .teclat a:hover {
            background-color: #4736cc;
        }
        .display-text {
            font-size: 22px;
            text-align: center;
            width: 90%;
            margin: 0 auto 20px auto;
            letter-spacing: 1px;
            padding: 12px;
            border-radius: 7px;
            border: 1px solid #bdbbdd;
            background: #f3f3fc;
        }
        .clear-btn {
            margin-top: 18px;
            padding: 8px 20px;
            background-color: #ff6961;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(255,105,97,0.15);
        }
        .clear-btn:hover {
            background-color: #e84135;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Màquina d'escriure virtual</h1>
        <input class="display-text" type="text" readonly value="<?php echo htmlspecialchars($_SESSION['text']); ?>" />

        <div class="teclat">
            <?php
            // Lletres de l'abecedari
            $lletres = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
            foreach ($lletres as $lletra) {
                echo '<a href="?lletra=' . urlencode($lletra) . '">' . $lletra . '</a>';
            }
            ?>
        </div>
        <form method="get" style="margin-top:15px;">
            <button name="clear" value="1" type="submit" class="clear-btn">Esborra Text</button>
        </form>
    </div>
</body>
</html>
