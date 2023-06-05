<?php
session_start();

if (isset($_SESSION['validation']) && !empty($_SESSION['validation'])) {
    $messageConfirmation = $_SESSION['validation'];
    unset($_SESSION['validation']);
} else {
    // Rediriger l'utilisateur vers la page d'inscription s'il n'y a pas de message de confirmation
    header('location: ' . PATH_ASIF . 'dg/inscription/');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de l'inscription</title>
</head>
<body>
    <h1>Confirmation de l'inscription</h1>
    <p><?php echo $messageConfirmation; ?></p>
</body>
</html>
