<?php
// Inclusion  de la session:
session_start();

?>
    <main>
      <div class="container">

        <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
          <h1>404</h1>
          <h2>The page you are looking for doesn't exist.</h2>
          <a class="btn" href="home">Retour à la Page Dashboard</a>
          
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="">BootstrapMade</a>
          </div>
        </section>

      </div>
    </main><!-- End #main -->

    <?php
// Inclusion du fichier de template:
require_once '..' .PATH_ASIF .'app/commun/template.php'; 
?>
