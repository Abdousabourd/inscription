
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
            <a class="dropdown-item d-flex align-items-center" href="<?=PATH_ASIF ?>dg\profile\profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
            </a>
            </li>
            <li>
            <hr class="dropdown-divider">
            </li>

            <li>
            <a class="dropdown-item d-flex align-items-center" href="<?=PATH_ASIF ?>dg\profile\profile">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
            </a>
            </li>
            <li>

            <hr class="dropdown-divider">
            </li>

            <li>
            <a class="dropdown-item d-flex align-items-center" href="<?=PATH_ASIF ?>dg\deconnexion\">
                <i class="bi bi-box-arrow-right"></i>
                <span>Deconnexion</span>
            </a>
        </li>

    </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

</ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
