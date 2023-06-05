<?php
$serveur = "localhost";
$utilisateur = "root";
$mdp = "";
$base_de_donnees = "gesco_ecole";

// Connexion à la base de données
$conn = mysqli_connect($serveur, $utilisateur, $mdp, $base_de_donnees);

// Vérification de la connexion
if (!$conn) {
    die("La connexion a échoué: " . mysqli_connect_error());
}
