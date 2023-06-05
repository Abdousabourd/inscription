<?php
session_start();

include '..'.PATH_ASIF .'app/commun/fonction.php';


$_SESSION['inscription-erreurs'] = [];


$_SESSION['donnees-utilisateur'] = [];

$donnees = [];

$erreurs = [];

if (isset($_POST['change_password'])) {


    if (!isset($_POST["newpassword"]) || empty($_POST["newpassword"])) {
        $erreurs["newpassword"] = "Le champ du mot de passe est vide. Veuillez le renseigner.";
      } elseif (strlen($_POST["newpassword"]) < 8) {
        $erreurs["newpassword"] = "Le champ doit contenir au moins 8 caractères. Les espaces ne sont pas pris en compte.";
      } else {
        $donnees["newpassword"] = $_POST['newpassword'];
      }
    if (isset($_POST["newpassword"]) && !empty($_POST["newpassword"]) && strlen(($_POST["newpassword"])) >= 8 && empty($_POST["renewpassword"])) {
        $erreurs["renewpassword"] = "Entrez votre mot de passe à nouveau.";
    }

        
    if (!isset($_POST["renewpassword"]) || empty($_POST["renewpassword"])) {
        $erreurs["renewpassword"] = "Le champ du mot de passe est vide. Veuillez le renseigner.";
    } elseif (strlen($_POST["renewpassword"]) < 8) {
        $erreurs["renewpassword"] = "Le champ doit contenir au moins 8 caractères. Les espaces ne sont pas pris en compte.";
    } else {
        $donnees["renewpassword"] = $_POST['renewpassword'];
    }

    if ((isset($_POST["renewpassword"]) && !empty($_POST["renewpassword"]) && strlen(($_POST["newpassword"])) >= 8 && $_POST["renewpassword"] != $_POST["newpassword"])) {
        $erreurs["renewpassword"] = "Mot de passe erroné. Entrez le mot de passe du précédent champs";
    }

    if ((isset($_POST["newpassword"]) && !empty($_POST["newpassword"]) && strlen(($_POST["newpassword"])) >= 8 && $_POST["renewpassword"] == $_POST["newpassword"])) {
        $donnees["newpassword"] = $_POST['newpassword'];
    }

    if (!check_password_exist(($_POST['password']), $_SESSION['utilisateur_connecter'][0]['id'])) { 
        $erreurs["password"] = "Mot de passe incorrecte. Veuillez réessayez";
    }
}

//die (var_dump(($_SESSION['utilisateur_connecter'][0]['id'])));

if (empty($erreurs)) {

    if (check_password_exist(($_POST['password']), $_SESSION['utilisateur_connecter'][0]['id'])) {

        if (maj_mot_passe($_SESSION['utilisateur_connecter'][0]['id'], $donnees["newpassword"])) {
            session_destroy();
            header("location: " .PATH_ASIF ."dg/connexion");
        } else {
            die('no good at all');
        }
    }
} else {
    $_SESSION['inscription-erreurs'] = $erreurs;
    header("location: " .PATH_ASIF ."dg/profile/profile"); 
}
        die('no good at all');
 



 
//die (var_dump(($_SESSION['utilisateur_connecter'][0]['id'])));

