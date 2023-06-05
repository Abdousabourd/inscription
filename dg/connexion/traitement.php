<?php
session_start();

include '..'.PATH_ASIF .'app/commun/fonction.php';   


$_SESSION['connexion-erreurs'] = [];

$_SESSION['donnees-utilisateur'] = [];

$donnees = [];

$erreurs = [];

if (isset($_POST["email-nom_utilisateur"]) && !empty($_POST["email-nom_utilisateur"])) {
    if (preg_match('/^[a-zA-Z0-9.@_]+$/', $_POST["email-nom_utilisateur"])) {
        $donnees["email-nom_utilisateur"] = $_POST["email-nom_utilisateur"];
    } else {
        $erreurs["email-nom_utilisateur"] = "Le champ email-nom_utilisateur n'est pas valide. Veuillez le renseigner avec des lettres, des chiffres, des points, des underscores et des arobases uniquement.";
    }
} else {
    $erreurs["email-nom_utilisateur"] = "Le champ email-nom_utilisateur est requis. Veuillez le renseigner.";
}

if (isset($_POST["mot-passe"]) && !empty($_POST["mot-passe"])) {
    if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["mot-passe"])) {
        $donnees["mot-passe"] = $_POST["mot-passe"];
    } else {
        $erreurs["mot-passe"] = "Le champ mot-passe n'est pas valide. Veuillez le renseigner avec des lettres et des chiffres uniquement.";
    }
} else {
    $erreurs["mot-passe"] = "Le champ mot-passe est requis. Veuillez le renseigner.";
}


if (isset($_POST["mot-passe"]) && !empty($_POST["mot-passe"]) && isset($_POST["email-nom_utilisateur"]) && !empty($_POST["email-nom_utilisateur"])) {
    if (check_if_user_exist($donnees["email-nom_utilisateur"], $donnees["mot-passe"], "dg",  1, 0)) {
        //Si l'utilisateur appuie sur le checkbox "se souvenir de moi" 
        if (isset($_POST['souvenir']) and !empty($_POST['souvenir'])) {
            $donnees['souvenir'] = $_POST['souvenir'];
            //Création du cookie
            setcookie(
                "donnees-utilisateur",
                json_encode($donnees['"email-nom_utilisateur"']),
                [
                    'expires' => time() + 365 * 24 * 36000,
                    'path' => '/',
                    'secure' => 'true',
                    'httponly' => 'true',
                ]
            );
        }
        //S'il n'appuie pas sur le checkbox "se souvenir de moi" je vide le cookie
        else {
            setcookie(
                "donnees-utilisateur",
                " ",
                [
                    'expires' => time() + 365 * 24 * 36000,
                    'path' => '/',
                    'secure' => 'true',
                    'httponly' => 'true',
                ]
            );
        }
        header('location: ' .PATH_ASIF .'dg/accueil/home/');
    } else {
        $_SESSION['connexion-erreurs'] = $erreurs;
         $erreurs["mot-passe"] = "Le nom d'utilisateur, l'adresse e-mail ou le mot de passe est incorrect. Veuillez vérifier vos informations.";
        

        
    }
    
}

if (empty($erreurs)) {
    $_SESSION['donnees-utilisateur'] = $donnees;
} else {
    $_SESSION['donnees-utilisateur'] = $donnees;
    $_SESSION['connexion-erreurs'] = $erreurs;
    header('location: ' .PATH_ASIF .'dg/connexion/');  
}





