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
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .zones {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Calcul de mon Indice de Masse Corporelle</h1>
        <img src="imc.jpg" alt="IMC">
        <h2>Entrez votre taille (en centimètres) et votre poids (en Kg), puis validez :</h2>
        <form method="POST" action="imc2.php">
            <div class="zones">
                <input type="text" name="taille" placeholder="Taille (cm)" required>
                <input type="text" name="poids" placeholder="Poids (kg)" required>
                <button type="submit">VALIDER</button>
            </div>
        </form>
    </div>
</body>

</html>