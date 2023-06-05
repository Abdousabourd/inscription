<?php
session_start();

if (isset($_SESSION['inscription-erreurs']) && !empty($_SESSION['inscription-erreurs'])) {
    $erreurs = $_SESSION['inscription-erreurs'];
}

if (isset($_SESSION['donnees-utilisateur']) && !empty($_SESSION['donnees-utilisateur'])) {
    $donnees = $_SESSION['donnees-utilisateur'];
}
include '..'.PATH_ASIF .'app/commun/fonction.php';

if (check_if_user_conneted()) {
  header('location: ' .PATH_ASIF .'dg/accueil/home');
}else{
  
}


?>


<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Gesco_ecole</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="<?=PATH_ASIF ?>public/NiceAdmin/assets/img/logo.png" rel="icon">
        <link href="<?=PATH_ASIF ?>public/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?=PATH_ASIF ?>public/NiceAdmin/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
                    <h5 class="card-title text-center pb-0 fs-4">Créer un compte</h5>
                    <p class="text-center small">Entrez vos données personnelles pour créer un comptet</p>
                  </div>

                  <?php
                            if (isset($_SESSION['validation']) && !empty($_SESSION['validation'])) {
                            ?>
                                <div class="alert alert-primary" style="color: white; background-color: #2653d4; border-color: snow;">
                                    <?= $_SESSION['validation'] ?>
                                </div>
                            <?php
                            }
                            ?>
                            
                            
   
<form method="POST" action="<?=PATH_ASIF ?>dg/inscription/traitement/"class="row g-3"class="user">
<div class="col-12">
<label for="inscription-nom">Nom:
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="nom" id="inscription-nom"
                                     class="form-control" placeholder="Veuillez entrer votre nom"
                                      value="<?php if (isset($donnees["nom"]) && !empty($donnees["nom"])) {
                                                                                                                                                                echo $donnees["nom"];
                                                                                                                                                            } else {
                                                                                                                                                                echo '';
                                                                                                                                                            } ?>">
                                    <span class="text-danger">
                                        <?php
                                        if (isset($erreurs["nom"]) && !empty($erreurs["nom"])) {
                                            echo $erreurs["nom"];
                                        }
                                        ?>
                                    </span>
    </div>

    <div class="col-12">
    <label for="inscription-prenom">Prénom(s):
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="prenom" id="inscription-prenom" class="form-control" placeholder="Veuillez entrer votre prénom" value="<?php if (isset($donnees["prenom"]) && !empty($donnees["prenom"])) {
                                                                                                                                                                        echo $donnees["prenom"];
                                                                                                                                                                    } else {
                                                                                                                                                                        echo '';
                                                                                                                                                                    } ?>">
                                    <span class="text-danger">
                                        <?php
                                        if (isset($erreurs["prenom"]) && !empty($erreurs["prenom"])) {
                                            echo $erreurs["prenom"];
                                        }
                                        ?>
                                    </span>
       
    </div>

    <div class="col-12"> 
    <label for="inscription-email">Email:
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="email" name="email" id="inscription-email" class="form-control" placeholder="Veuillez entrer votre address email" value="<?php if (isset($donnees["email"]) && !empty($donnees["email"])) {
                                                                                                                                                                                echo $donnees["email"];
                                                                                                                                                                            } else {
                                                                                                                                                                                echo '';
                                                                                                                                                                            } ?>">
                                    <span class="text-danger">
                                        <?php
                                        if (isset($erreurs["email"]) && !empty($erreurs["email"])) {
                                            echo $erreurs["email"];
                                        }
                                        ?>
                                    </span>

    </div>

    <div class="col-12">
    <label for="inscription-nom-utilisateur">Nom d'utilisateur:
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="nom-utilisateur" id="inscription-nom-utilisateur" class="form-control" placeholder="Veuillez entrer votre nom d'utilisateur" value="<?php if (isset($donnees["nom-utilisateur"]) && !empty($donnees["nom-utilisateur"])) {
                                                                                                                                                                                                        echo $donnees["nom-utilisateur"];
                                                                                                                                                                                                    } else {
                                                                                                                                                                                                        echo '';
                                                                                                                                                                                                    } ?>">
                                    <span class="text-danger">
                                        <?php
                                        if (isset($erreurs["nom-utilisateur"]) && !empty($erreurs["nom-utilisateur"])) {
                                            echo $erreurs["nom-utilisateur"];
                                        }
                                        ?>
                                    </span>                
    </div>

    <div class="col-6"> 
    <label for="inscription-mot-passe">Mot de passe:
        <span class="text-danger">(*)</span>
    </label>
    <input type="password" name="mot-passe" id="inscription-mot-passe" class="form-control" placeholder="Veuillez entrer votre mot de passe" value="<?php if (isset($donnees["mot-passe"]) && !empty($donnees["mot-passe"])) {
                                                                                                                                                                                            echo $donnees["mot-passe"];
                                                                                                                                                                                        } else {
                                                                                                                                                                                            echo '';
                                                                                                                                                                                        } ?>">
                                    <span class="text-danger">
                                            <?php
                                            if (isset($erreurs["mot-passe"]) && !empty($erreurs["mot-passe"])) {
                                                echo $erreurs["mot-passe"];
                                            }
                                            ?>
                                        </span>
    </div>

    <div class="col-6"> 
                                    <label for="inscription-retapez-mot-passe">Retaper passe:
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="password" name="retapez-mot-passe" id="inscription-retapez-mot-passe" class="form-control" placeholder="Veuillez retaper votre mot de passe" value="<?php if (isset($donnees["retapez-mot-passe"]) && !empty($donnees["retapez-mot-passe"])) {
                                                                                                                                                                                                echo $donnees["retapez-mot-passe"];
                                                                                                                                                                                            } else {
                                                                                                                                                                                                echo '';
                                                                                                                                                                                            } ?>">

                                    <span class="text-danger">
                                        <?php
                                        if (isset($erreurs["retapez-mot-passe"]) && !empty($erreurs["retapez-mot-passe"])) {
                                            echo $erreurs["retapez-mot-passe"];
                                        }
                                        ?>
                                    </span>
                                </div>

    <div class="col-12"> 
        <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" name="cocher" id="customCheck">
                                        <label class="custom-control-label" for="customCheck" style="color: blue; font-size: large;">J'accepte les termes et conditions</label>
                                    </div>
                                    <span class="text-danger">
                                        <?php
                                        if (isset($erreurs["cocher"]) && !empty($erreurs["cocher"])) {
                                            echo $erreurs["cocher"];
                                        }
                                        ?>
                                    </span>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Inscription</button>
 
  
</form>
<hr>
<div class="text-center">
<a class="small" href="<?=PATH_ASIF ?>dg/mot_de_passe/"> Mot de passe oublié ? </a>
</div>
<div class="text-center">
<a class="small" href="<?=PATH_ASIF ?>dg/connexion/">Vous avez déjà un compte ? Connectez-vous!</a>
</div>

<?php
    session_destroy();

?>
<style>/* Style pour le formulaire */
form {
 
  
 
  padding: 5px;

 
  border-radius: 5px;
  background-color: #f9f9f9;
}





/* Style pour le champ "Terme et conditions" */
form input[type=checkbox] {
  margin-right: 5px;
}

/* Style pour le bouton du formulaire */
form button[type=submit] {
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}




</style>











                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
  <script src="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?=PATH_ASIF ?>public/NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=PATH_ASIF ?>public/NiceAdmin/assets/js/main.js"></script>
</body>

</html>