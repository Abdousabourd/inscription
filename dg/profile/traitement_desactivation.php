
<?php
session_start();

include '..'.PATH_ASIF .'app/commun/fonction.php';

$_SESSION['desactivation-erreurs'] = "";

$_SESSION['donnees-utilisateur'] = [];

$donnees = [];

$erreurs = [];

if (isset($_POST['desactivation'])) {

    if (check_password_exist(($_POST['password']), $_SESSION['utilisateur_connecter'][0]['id'])) {
        if (desactiver_utilisateur($_SESSION['utilisateur_connecter'][0]['id'])) {
            session_destroy();
            header('location: ' .PATH_ASIF .'app/commun/index'); 
            
        }
    } else {
        $_SESSION['desactivation-erreurs'] = "La desactivation à echouer. Vérifier votre mot de passe et réessayez.";
        header('location: ' .PATH_ASIF .'dg/profil/profile');
    }
} else {
    die('no good at all');
}

