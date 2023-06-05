<?php
session_start();
include "..".PATH_ASIF ."app/commun/fonction.php";

if(isset($_SESSION["utilisateur_connecter"][0]["id"]) && !empty($_SESSION["utilisateur_connecter"][0]["id"])){
    $id = $_SESSION["utilisateur_connecter"][0]["id"];
}

$_SESSION['inscription-erreurs'] = [];
$_SESSION['donnees-utilisateur'] = [];

$donnees = [];
$erreurs = [];

if (isset($_POST["nom"]) && !empty($_POST["nom"])) {
    if (preg_match('/^[a-zA-Z\s]+$/', $_POST["nom"])) {
        $donnees["nom"] = $_POST["nom"];
    } else {
        $erreurs["nom"] = "Le champ nom n'est pas valide. Veuillez le renseigner avec des lettres uniquement.";
    }
} else {
    $erreurs["nom"] = "Le champ nom est requis. Veuillez le renseigner.";
}

if (isset($_POST["prenom"]) && !empty($_POST["prenom"])) {
    if (preg_match('/^[a-zA-Z\s]+$/', $_POST["prenom"])) {
        $donnees["prenom"] = $_POST["prenom"];
    } else {
        $erreurs["prenom"] = "Le champ prénom n'est pas valide. Veuillez le renseigner avec des lettres uniquement.";
    }
} else {
    $erreurs["prenom"] = "Le champ prénom est requis. Veuillez le renseigner.";
}

if (!isset($_POST["email"]) || empty($_POST["email"])) {
    $erreurs["email"] = "Le champ email est vide. Veuillez le renseigner.";
} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $erreurs["email"] = "Le champ email n'est pas valide. Veuillez renseigner une adresse email valide.";
} else {
    $donnees["email"] = $_POST["email"];
}

if (isset($_POST["nom_utilisateur"]) && !empty($_POST["nom_utilisateur"])) {
    if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["nom_utilisateur"])) {
        $donnees["nom_utilisateur"] = $_POST["nom_utilisateur"];
    } else {
        $erreurs["nom_utilisateur"] = "Le champ nom d'utilisateur n'est pas valide. Veuillez le renseigner avec des lettres et des chiffres uniquement.";
    }
} else {
    $erreurs["nom_utilisateur"] = "Le champ nom d'utilisateur est requis. Veuillez le renseigner.";
}

if (isset($_POST["profile"]) && !empty($_POST["profile"])) {
    if (preg_match('/^[a-zA-Z\s]+$/', $_POST["profile"])) {
        $donnees["profile"] = $_POST["profile"];
    } else {
        $erreurs["profile"] = "Le champ profile n'est pas valide. Veuillez le renseigner avec des lettres uniquement.";
    }
} else {
    $erreurs["profile"] = "Le champ profile est requis. Veuillez le renseigner.";
}

if (!isset($_POST["mot_passe"]) || empty($_POST["mot_passe"])) {
    $erreurs["mot_passe"] = "Le champ du mot de passe est vide. Veuillez le renseigner.";
} elseif (strlen($_POST["mot_passe"]) < 8) {
    $erreurs["mot_passe"] = "Le champ doit contenir au moins 8 caractères. Les espaces ne sont pas pris en compte.";
} else {
    $donnees["mot_passe"] = $_POST['mot_passe'];
}

if(empty($erreurs)){
    $check_password = check_password_exist($donnees['mot_passe'], $id);
    if($check_password){
        if(update_profil_in_db($id, $donnees['nom'], $donnees['prenom'], $donnees['email'], $donnees['nom_utilisateur'], $donnees['profile'], $donnees['mot_passe'])){
            if(recup_udpate_profil($id)) {
                $_SESSION["inscription-success"] = "Profil mis à jour avec succès !";
                header("Location: " . PATH_ASIF . "dg/connexion");
                exit();
            } else {
                $erreurs["mot_passe"] = "Une erreur s'est produite lors de la mise à jour du profil.";
            }
        } else {
            $erreurs["mot_passe"] = "Une erreur s'est produite lors de la mise à jour du profil.";
        }
    } else {
        $erreurs["mot_passe"] = "Mot de passe incorrect, veuillez réessayer.";
    }
}

$_SESSION["inscription-erreurs"] = $erreurs;
header("Location: " . PATH_ASIF . "dg/profile/profile");
exit();
?>
