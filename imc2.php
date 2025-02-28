<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de l'IMC</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h1 {
            color: #007BFF;
            margin-bottom: 20px;
        }
        h2 {
            margin: 10px 0;
        }
        .result {
            font-size: 24px;
            font-weight: bold;
            color: #28a745;
        }
        .warning {
            color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Calcul de mon Indice de Masse Corporelle</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $taille = $_POST['taille'];
            $poids = $_POST['poids'];

            if (is_numeric($taille) && is_numeric($poids)) {
                // Convertir la taille de centimètres en mètres
                $taille_metres = (float)$taille / 100;
                $taille_m2 = $taille_metres * $taille_metres;
                $result = (float)$poids / $taille_m2;

                echo "<h2 class='result'>Votre IMC est de " . number_format($result, 2) . "</h2>";

                if ($result < 18.5) {
                    echo "<h2 class='warning'>Vous êtes en sous-poids.</h2>";
                } elseif ($result >= 18.5 && $result < 25) {
                    echo "<h2 class='result'>Vous êtes normal.</h2>";
                } elseif ($result >= 25 && $result < 30) {
                    echo "<h2 class='warning'>Vous êtes en sur-poids.</h2>";
                } elseif ($result >= 30 && $result < 35) {
                    echo "<h2 class='warning'>Vous êtes en obésité.</h2>";
                } elseif ($result >= 35) {
                    echo "<h2 class='warning'>Vous êtes en obésité sévère.</h2>";
                }
            } else {
                echo "<h2 class='warning'>Veuillez entrer des valeurs numériques valides.</h2>";
            }
        }
        ?>
    </div>
</body>

</html>