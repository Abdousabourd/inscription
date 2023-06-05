    <!DOCTYPE html>
    <html lang="fr">
   
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
        
            <!-- Font Awesome -->
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/fontawesome-free/css/all.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Tempusdominus Bbootstrap 4 -->
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
            <!-- Select2 -->
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/select2/css/select2.min.css">
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

            <!-- iCheck -->
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
            <!-- JQVMap -->
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/jqvmap/jqvmap.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/dist/css/adminLTE.min.css">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
            <!-- Daterange picker -->
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/daterangepicker/daterangepicker.css">
            <!-- summernote -->
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/summernote/summernote-bs4.css">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
            <!-- Google Font: Roboto -->
            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet"> 
            <!-- Google Font: Poppins -->
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet"> 
            <!-- DataTables -->
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

            <!-- iCheck for checkboxes and radio inputs -->
            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

            <link rel="stylesheet" href="<?=PATH_ASIF ?>public/LTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
            
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


                <!-- =======================================================
                * Template Name:  - v2.5.0
                * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
                * Author: BootstrapMade.com
                * License: https://bootstrapmade.com/license/
                ======================================================== -->
    </head>



    <body>
    <!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
<a href="home" class="logo d-flex align-items-center">
    <img src="<?=PATH_ASIF ?>public/NiceAdmin/assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">Gestion Ecole</span>
</a>
<i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->


<nav class="header-nav ms-auto">
<ul class="d-flex align-items-center">

    <li class="nav-item dropdown">

    

    

    
    <li class="nav-item dropdown pe-3">

    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="<?=PATH_ASIF ?>public/NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2"><h4><?= $_SESSION["utilisateur_connecter"][0]['nom_utilisateur']?> </h4></span>
        </a><!-- End Profile Iamge Icon -->

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
        <h6><?= $_SESSION["utilisateur_connecter"][0]['nom_utilisateur']?></h6>
        <span><?= $_SESSION["utilisateur_connecter"][0]['profile']?></span>
        </li>
        <li>
        <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="<?=PATH_ASIF ?>etudiant\profile\profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
            </a>
            </li>
            <li>
            <hr class="dropdown-divider">
            </li>

            <li>
            <a class="dropdown-item d-flex align-items-center" href="<?=PATH_ASIF ?>etudiant\profile\profile">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
            </a>
            </li>
            <li>

            <hr class="dropdown-divider">
            </li>

            <li>
            <a class="dropdown-item d-flex align-items-center" href="<?=PATH_ASIF ?>etudiant\deconnexion\">
                <i class="bi bi-box-arrow-right"></i>
                <span>Deconnexion</span>
            </a>
        </li>

    </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

</ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link "href="<?=PATH_ASIF ?>etudiant/accueil/home">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"href="<?=PATH_ASIF ?>etudiant/accueil/etudiant_inscription">
        <i class="bi bi-menu-button-wide"></i><span>Etudiant</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="<?=PATH_ASIF ?>etudiant/accueil/etudiant_inscription">
            <i class="bi bi-circle"></i><span>Ajouter Etudiant</span>
            </a>
        </li>
        <li>
            <a href="<?=PATH_ASIF ?>etudiant/accueil/Liste_des_etudiants">
            <i class="bi bi-circle"></i><span>liste Etudiant</span>
            </a>
        </li>

        
        </ul>
</li><!-- End Components Nav -->

<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"href="<?=PATH_ASIF ?>etudiant/accueil/ajoute_filiere">
        <i class="bi bi-journal-text"></i><span>Filière</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="<?=PATH_ASIF ?>etudiant/accueil/ajoute_filiere">
                <i class="bi bi-circle"></i><span>Ajouter Filière</span>
                </a>
            </li>
        
            <li>
                <a href="<?=PATH_ASIF ?>etudiant/accueil/Liste_des_filieres">
                <i class="bi bi-circle"></i><span>Liste Filière </span>
                </a>
            </li>
            
        </ul>
</li><!-- End Forms Nav -->

<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"href="<?=PATH_ASIF ?>etudiant/accueil/ajoute_martiere">
        <i class="bi bi-layout-text-window-reverse"></i><span>Martière</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            
            <li>
                <a href="<?=PATH_ASIF ?>etudiant/accueil/ajoute_martiere">
                <i class="bi bi-circle"></i><span>Ajouter Martière</span>
                </a>
            </li>
            <li>
                <a href="<?=PATH_ASIF ?>etudiant/accueil/liste_des_matieres">
                <i class="bi bi-circle"></i><span>Liste Compositions</span>
                </a>
            </li>
            
        </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"href="<?=PATH_ASIF ?>etudiant/accueil/gestion_de_la_scolarite">
        <i class="bi bi-bar-chart"></i><span>Gestion-Scolaire</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="<?=PATH_ASIF ?>etudiant/accueil/gestion_de_la_scolarite">
                <i class="bi bi-circle"></i><span>Gestion de la scolarite </span>
                </a>
            </li>

            <li>
                <a href="<?=PATH_ASIF ?>etudiant/accueil/annees_academique">
                <i class="bi bi-circle"></i><span> Années Academique </span>
                </a>
            </li>
        </ul>
    </li><!-- End Charts Nav -->


    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/profile/profile">
        <i class="bi bi-person"></i>
        <span>Profile</span>
        </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/accueil/contacts">
        <i class="bi bi-envelope"></i>
        <span>Contacts</span>
        </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/inscription/">
        <i class="bi bi-card-list"></i>
        <span>S'inscrits</span>
        </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/connexion/">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>connexion</span>
        </a>
    </li><!-- End Login Page Nav -->
    
    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/deconnexion/">
        <i class="bi bi-box-arrow-in-left"></i>
        <span>Deconnexion</span>
        </a>
    </li><!-- End Deconnexion Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/accueil/404">
        <i class="bi bi-dash-circle"></i>
        <span>Page_404</span>
        </a>
    </li><!-- End Error 404 Page Nav -->
    </ul>

</aside><!-- End Sidebar-->



     

    



<li class="nav-heading">Pages</li>

<li class="nav-item">
    <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/profile/profile">
    <i class="bi bi-person"></i>
    <span>Profile</span>
    </a>
</li><!-- End Profile Page Nav -->

<li class="nav-item">
    <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/accueil/contacts">
    <i class="bi bi-envelope"></i>
    <span>Contacts</span>
    </a>
</li><!-- End Contact Page Nav -->

<li class="nav-item">
    <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/inscription/">
    <i class="bi bi-card-list"></i>
    <span>S'inscrits</span>
    </a>
</li><!-- End Register Page Nav -->

<li class="nav-item">
    <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/connexion/">
    <i class="bi bi-box-arrow-in-right"></i>
    <span>connexion</span>
    </a>
</li><!-- End Login Page Nav -->

<li class="nav-item">
    <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/deconnexion/">
    <i class="bi bi-box-arrow-in-left"></i>
    <span>Deconnexion</span>
    </a>
</li><!-- End Deconnexion Page Nav -->

<li class="nav-item">
    <a class="nav-link collapsed"href="<?=PATH_ASIF ?>etudiant/accueil/404">
    <i class="bi bi-dash-circle"></i>
    <span>Page_404</span>
    </a>
</li><!-- End Error 404 Page Nav -->
</ul>

</aside><!-- End Sidebar-->


    <main id="main" class="main">


</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="container">

    </div>
</section>

</main><!-- End main Title -->




<!-- footer -->
<?php include '..'.PATH_ASIF.'app/commun/_footer.php'; ?>
<!-- /.footer -->

</body>