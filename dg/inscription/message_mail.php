<?php

$url = 'localhost'.PATH_ASIF. 'dg/inscription/validation_de_compte/index/{id_utilisateur}/{token}';

if (isset($_SESSION['validation_compte']) && !empty($_SESSION['validation_compte'])) {
    $id_utilisateur = $_SESSION['validation_compte']['id_utilisateur'];
    $token = $_SESSION['validation_compte']['token'];
}

$url = str_replace('{id_utilisateur}', $id_utilisateur, $url);

$url = str_replace('{token}', $token, $url);


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email de Gestion d'Ecole</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #F5F5F5;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFFFFF;
            border: 1px solid #DDDDDD;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin: 0;
            color: #fff;
        }

        img {
            width: auto;
            height: 80px;
        }

        p {
            font-size: 16px;
            margin-top: 10px;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1E90FF;
            color: #012970;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .button:hover {
            background-color: #f6f9ff;
            color: #1E90FF;
            border: 1px solid #1E90FF;
        }
    </style>
</head>

<body>
    <div class="container" style="background-color: black; display: flex; justify-content: center; align-items: center;">
        <div style="margin-right: 40px;">
            <img src="https://celebrason.com/media/1473737489_palmier-courbe-543556a76ac15.png" alt="">
        </div>
        <div>
            <h1>Nouvelle inscription</h1>
        </div>

    </div>
    <div class="container">
        <p>Bienvenue cher client,</p>
        <p>Nous avons bien reçu votre demande d'inscription à notre plateforme et nous vous remercions de votre intérêt pour nos services. Afin de pouvoir accéder à votre compte,
            veuillez cliquer sur le bouton ci-dessous pour valider votre compte:</p>

        <a href="<?= $url ?>" target="_blank" style="display: flex;  justify-content: center; background-color: #1a73e8; color: #fff; text-decoration: none; padding: 10px 20px; border-radius: 5px;">Valider mon compte</a>

        <p>Une fois que vous aurez cliqué sur le bouton, votre compte sera activé et vous pourrez vous connecter à votre compte en utilisant les informations que vous avez fournies lors de votre inscription.</p>
        <p>Si vous rencontrez des difficultés pour valider votre compte ou si vous avez des questions, n'hésitez pas à nous écrire.</p>
        <p>Cordialement, l'équipe de  "Gestion d'Ecole"</p>
    </div>
</body>

</html>