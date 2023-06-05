<?php session_start();?>

<main id="main" class="main"><!-- Gestion de la scolarité des étudiants  #main -->

    <div class="pagetitle">
    <h1>Tableaux de bord</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">Accueil</a></li>
        <li class="breadcrumb-item active">Tableaux de bord</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-10">
            <h1>Gestion de scolarité</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content py-5 ">
    <div class="container">
        <div class="row">
            <div class="card-body login-card-body shadow m-5 p-5">
                <h2 class="login-box-msg">Remplir le matricule</h2>
                    <form action="http://localhost/SchoolGest/search-matricule.html" method="GET" class="d-flex justify-content-center">
                        <div class="form-group mr-3 col-6">
                            <input type="matricule" class="form-control " placeholder="Matricule" name="matricule">
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary btn-block">Rechercher</button>
                        </div>
                        </form></div>
                    
            </div>                                    
        </div>
    </section></div>








</main><!-- End  Gestion de la scolarité des étudiants #main -->

<?php
// Inclusion du fichier de template:
require_once '..' .PATH_ASIF .'app/commun/template.php';
?>
