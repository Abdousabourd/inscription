<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link "href="<?=PATH_ASIF ?>dg/accueil/home">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"href="<?=PATH_ASIF ?>dg/accueil/etudiant_inscription">
        <i class="bi bi-menu-button-wide"></i><span>Etudiant</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="<?=PATH_ASIF ?>dg/accueil/etudiant_inscription">
            <i class="bi bi-circle"></i><span>Ajouter Etudiant</span>
            </a>
        </li>
        <li>
            <a href="<?=PATH_ASIF ?>dg/accueil/Liste_des_etudiants">
            <i class="bi bi-circle"></i><span>liste Etudiant</span>
            </a>
        </li>

        
        </ul>
</li><!-- End Components Nav -->

<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"href="<?=PATH_ASIF ?>dg/accueil/ajoute_filiere">
        <i class="bi bi-journal-text"></i><span>Filière</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="<?=PATH_ASIF ?>dg/accueil/ajoute_filiere">
                <i class="bi bi-circle"></i><span>Ajouter Filière</span>
                </a>
            </li>
        
            <li>
                <a href="<?=PATH_ASIF ?>dg/accueil/Liste_des_filieres">
                <i class="bi bi-circle"></i><span>Liste Filière </span>
                </a>
            </li>
            
        </ul>
</li><!-- End Forms Nav -->

<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"href="<?=PATH_ASIF ?>dg/accueil/ajoute_martiere">
        <i class="bi bi-layout-text-window-reverse"></i><span>Martière</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            
            <li>
                <a href="<?=PATH_ASIF ?>dg/accueil/ajoute_martiere">
                <i class="bi bi-circle"></i><span>Ajouter Martière</span>
                </a>
            </li>
            <li>
                <a href="<?=PATH_ASIF ?>dg/accueil/liste_des_matieres">
                <i class="bi bi-circle"></i><span>Liste Compositions</span>
                </a>
            </li>
            
        </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"href="<?=PATH_ASIF ?>dg/accueil/gestion_de_la_scolarite">
        <i class="bi bi-bar-chart"></i><span>Gestion-Scolaire</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="<?=PATH_ASIF ?>dg/accueil/gestion_de_la_scolarite">
                <i class="bi bi-circle"></i><span>Gestion de la scolarite </span>
                </a>
            </li>

            <li>
                <a href="<?=PATH_ASIF ?>dg/accueil/annees_academique">
                <i class="bi bi-circle"></i><span> Années Academique </span>
                </a>
            </li>
        </ul>
    </li><!-- End Charts Nav -->


    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>dg/profile/profile">
        <i class="bi bi-person"></i>
        <span>Profile</span>
        </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>dg/accueil/contacts">
        <i class="bi bi-envelope"></i>
        <span>Contacts</span>
        </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>dg/inscription/">
        <i class="bi bi-card-list"></i>
        <span>S'inscrits</span>
        </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>dg/connexion/">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>connexion</span>
        </a>
    </li><!-- End Login Page Nav -->
    
    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>dg/deconnexion/">
        <i class="bi bi-box-arrow-in-left"></i>
        <span>Deconnexion</span>
        </a>
    </li><!-- End Deconnexion Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed"href="<?=PATH_ASIF ?>dg/accueil/404">
        <i class="bi bi-dash-circle"></i>
        <span>Page_404</span>
        </a>
    </li><!-- End Error 404 Page Nav -->
    </ul>

</aside><!-- End Sidebar-->

