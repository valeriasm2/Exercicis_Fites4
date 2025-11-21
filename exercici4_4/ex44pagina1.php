<?php
session_start();

// Inicialitza la variable de sessió si no existeix
if (!isset($_SESSION['notes'])) {
    $_SESSION['notes'] = "";
}

// Processa l'enviament del formulari
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nou_text = isset($_POST['nota']) ? trim($_POST['nota']) : '';
    if ($nou_text !== '') {
        $_SESSION['notes'] .= htmlspecialchars($nou_text) . "<br><br>";
    }
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Prendre notes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f6fb;
            margin: 0;
            padding: 0;
        }
        .container {
            background: #fff;
            max-width: 520px;
            margin: 40px auto 0 auto;
            padding: 32px 36px 24px 36px;
            border-radius: 10px;
            box-shadow: 0 6px 40px rgba(30,45,100,.13);
            text-align: center;
        }
        h1 {
            color: #644eec;
            margin-bottom: 18px;
            font-size: 2em;
        }
        textarea {
            width: 95%;
            min-height: 60px;
            max-width: 95%;
            padding: 9px 13px;
            font-size: 17px;
            border-radius: 5px;
            border: 1px solid #bdbbdd;
            margin-bottom: 18px;
            resize: vertical;
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
        .notes-output {
            background: #f3f3fc;
            margin: 20px auto 0 auto;
            padding: 20px 18px;
            border-radius: 7px;
            border: 1px solid #bdbbdd;
            font-size: 17px;
            min-height: 40px;
            text-align: left;
            white-space: pre-line;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bloc de notes</h1>
        <form method="post" action="">
            <textarea name="nota" required placeholder="Escriu la teva nota aquí..."></textarea><br>
            <input type="submit" value="Afegeix nota">
        </form>
        <div class="notes-output">
            <?php
            echo $_SESSION['notes'];
            ?>
        </div>
    </div>
</body>
</html>
