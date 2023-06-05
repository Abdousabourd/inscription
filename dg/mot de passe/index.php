<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer l'adresse e-mail saisie par l'utilisateur
    $email = $_POST['email'];

    // Vérifier si l'adresse e-mail existe dans la base de données
    // Si elle existe, générer un lien de réinitialisation unique et envoyer le lien à l'utilisateur par e-mail

    // Afficher un message de confirmation
    echo "Un e-mail contenant un lien de réinitialisation de mot de passe a été envoyé à l'adresse $email.";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Pages / Gesco-Mrcharisme</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="<?=PATH_ASIF ?>public/img/favicon.png" rel="icon">
<link href="<?=PATH_ASIF ?>public/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?=PATH_ASIF ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=PATH_ASIF ?>public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?=PATH_ASIF ?>public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="<?=PATH_ASIF ?>public/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="<?=PATH_ASIF ?>public/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="<?=PATH_ASIF ?>public/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="<?=PATH_ASIF ?>public/vendor/simple-datatables/style.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?=PATH_ASIF ?>public/css/style.css" rel="stylesheet">

</head>

<body>

<main>
    <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="public/img/logo.png" alt="">
                <span class="d-none d-lg-block">Gesco-Mrcharisme</span>
                </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

                <div class="card-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Mot de passe oublié</h5>
                    <p class="text-center small">Entrez votre Adresse e-mai </p>
                </div>

                <form method="post" action="<?=PATH_ASIF ?>dg\mot de passe\mot_de_passe_oublie_traitement" class="row g-3 needs-validation">
        
                <div class="col-12">
                    <label for="yourEmail" class="form-label">Votre adresse e-mail
                    </label>
                    <input type="email" name="email" class="form-control" id="email" required>
                    <div class="invalid-feedback">svp entrer votre adreasse e-mail!</div>
                </div>
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Envoyer</button>
        </div>
        <div class="col-12">
            <p class="small mb-0">Vous avez déjà un compte ?  <a href="<?=PATH_ASIF ?>dg/connexion/">S'identifier</a></p>
        </div>
                </form>




</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?=PATH_ASIF ?>public/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?=PATH_ASIF ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=PATH_ASIF ?>public/vendor/chart.js/chart.umd.js"></script>
<script src="<?=PATH_ASIF ?>public/vendor/echarts/echarts.min.js"></script>
<script src="<?=PATH_ASIF ?>public/vendor/quill/quill.min.js"></script>
<script src="<?=PATH_ASIF ?>public/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?=PATH_ASIF ?>public/vendor/tinymce/tinymce.min.js"></script>
<script src="<?=PATH_ASIF ?>public/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?=PATH_ASIF ?>public/js/main.js"></script>

</body>

</html>