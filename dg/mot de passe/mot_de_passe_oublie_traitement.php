<?php
  
  include '..'.PATH_ASIF .'app/commun/fonction.php';

if(isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Vérifier si l'e-mail existe dans la base de données
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        // Générer un token de réinitialisation de mot de passe unique
        $token = bin2hex(random_bytes(32));

        // Enregistrer le token dans la base de données pour l'utilisateur
        $stmt = $conn->prepare("UPDATE users SET reset_token=? WHERE email=?");
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();

        // Envoyer un e-mail à l'utilisateur avec un lien de réinitialisation de mot de passe
        $to = $email;
        $subject = "Réinitialisation de mot de passe";
        $message = "Cliquez sur ce lien pour réinitialiser votre mot de passe : " . BASE_URL . "reset_password.php?token=" . $token;
        $headers = "From: " . FROM_EMAIL . "\r\n";
        $headers .= "Reply-To: " . FROM_EMAIL . "\r\n";
        $headers .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        // Rediriger l'utilisateur vers une page de confirmation
        header("Location: password_reset_confirm.php");
        exit();
    } else {
        // Si l'e-mail n'existe pas, afficher un message d'erreur
        $error = "L'e-mail n'existe pas dans la base de données.";
    }
}
header('location: /' .PATH_ASIF .'/app/commun/template.php');
?>

