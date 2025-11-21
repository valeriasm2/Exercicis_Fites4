<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex41</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Enregistra nombre</h1>
        <form action="ex41pagina2.php" method="POST">
            <input type="number" name="oculto" required>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>