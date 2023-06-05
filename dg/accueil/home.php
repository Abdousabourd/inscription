<?php

session_start();

include '..'.PATH_ASIF.'app/commun/fonction.php';
if (!check_if_user_conneted()) {
  header('location: ' .PATH_ASIF .'dg/connexion/');  }
?>




<main id="main" class="main"><!-- Accueil  #main -->

    <div class="pagetitle">
    <h1>Tableaux de bord</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">Accueil</a></li>
        <li class="breadcrumb-item active">Tableaux de bord</li>
        <div class="alert-message">
          Connexion Réussi Bienvenue  !
        </div><style>.alert-message {
position: fixed;
top: 65px;
left: 80%;
transform: translateX(-50%);
padding: 10px 20px;
background-color: #007bff;
color: white;
font-size: 18px;
border-radius: 5px;
opacity: 1;
transition: opacity 0.4s ease-in-out;
}



.hide {
  opacity: 0;
}
</style>
        </ol>
    </nav>
    </div><!-- End Page Title -->

 
    <section class="section dashboard">
    <div class="row">

        <div class="card-body">
            <h5 class="card-title"></h5>

            <!-- Slides with captions -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item">
                  <img src="<?=PATH_ASIF ?>public/NiceAdmin/assets/img/slide-1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="<?=PATH_ASIF ?>public/NiceAdmin/assets/img/slide-2.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item active">
                  <img src="<?=PATH_ASIF ?>public/NiceAdmin/assets/img/slide-3.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>

            </div><!-- End Slides with captions -->

          </div>

        <!-- Left side columns -->
        <div class="col-12">
        <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-3 col-3">
            <div class="card info-card sales-card">

                <div class="card-body">
                <h5 class="card-title">Etudiant  <span>| </span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                    <h6>145</h6>
                    <span class="text-success small pt-1 fw-bold">Etudiants

                    </div>
                </div>
                </div>

            </div>
            </div><!-- End Sales Card -->


            <!-- Revenue Card -->
            <div class="col-xxl-3 col-3 ">
                <div class="card info-card revenue-card">

                <div class="card-body">
                    <h5 class="card-title">Matières <span>| </span></h5>

                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                        <h6>264</h6>
                        <span class="text-danger small pt-1 fw-bold">Matières 

                    </div>
                    </div>
                </div>

                </div>
            </div><!-- End Revenue Card -->


            <!-- Sales Card -->
            <div class="col-xxl-3 col-3">
                <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Filières  <span>| </span></h5>

                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">Filières

                    </div>
                    </div>
                </div>

                </div>
            </div><!-- End Sales Card -->


            
            <!-- Customers Card -->
            <div class="col-xxl-3 col-3">

            <div class="card info-card customers-card">

    
                <div class="card-body">
                <h5 class="card-title">Année <span>| </span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                    <h6>2020</h6>
                    <span class="text-danger small pt-1 fw-bold">Année
                    </div>
                </div>
                </div>
            </div>
            </div><!-- End Customers Card -->
                </div></div>
        </div><!-- End Reports -->
      </div><!-- End Left side columns -->
    </section>

    <section class="section dashboard">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-light">
          <div class="card-header">
            <h3 class="card-title">Gestion de la scolarité des étudiants</h3>
            <!-- <div class="col-sm-2"> -->
            <!-- </div> -->
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-4 table-responsive" style="display: block;">
            <style>
                td {
                    white-space: nowrap;
                }
            </style>
            <div id="table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="table_length"><label>Afficher <select name="table_length" aria-controls="table" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> éléments</label></div></div><div class="col-sm-12 col-md-6"><div id="table_filter" class="dataTables_filter"><label>Rechercher :<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable no-footer" id="table" role="grid" aria-describedby="table_info">
              <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Matricule: activer pour trier la colonne par ordre décroissant">Matricule</th><th hidden="" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="ID: activer pour trier la colonne par ordre croissant">ID</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Nom et Prénom(s): activer pour trier la colonne par ordre croissant">Nom et Prénom(s)</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Filière: activer pour trier la colonne par ordre croissant">Filière</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Reste à payer: activer pour trier la colonne par ordre croissant">Reste à payer</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Action: activer pour trier la colonne par ordre croissant">Action</th></tr>
              </thead>
              <tbody>
                                
                                
                                
                              <tr role="row" class="odd">
                  <td hidden="" class="sorting_1">66</td>
                  <td>100</td>
                  <td><a href="details-etudiant.html/idInsc/66">LAFIA Mouminatou</a></td>
                  <td><a href="matricule.html">FASH</a></td>
                  <td><span class="badge badge-danger">
                    4000 FCFA                    </span></td>
                  <td>              
                    <a href="http://localhost/SchoolGest/search-matricule.html?matricule=100" class="btn btn-secondary btn-sm text-white" data-tog="tooltip" data-placement="bottom" title="Faire un règlement">Ajouter un règlement</a>
                  </td>
                </tr><tr role="row" class="even">
                  <td hidden="" class="sorting_1">67</td>
                  <td>101</td>
                  <td><a href="details-etudiant.html/idInsc/67">IDRISSOU F Abdou Sabourd</a></td>
                  <td><a href="matricule.html">IG</a></td>
                  <td><span class="badge badge-danger">
                    0 FCFA                    </span></td>
                  <td>              
                    <a href="http://localhost/SchoolGest/search-matricule.html?matricule=101" class="btn btn-secondary btn-sm text-white" data-tog="tooltip" data-placement="bottom" title="Faire un règlement">Ajouter un règlement</a>
                  </td>
                </tr><tr role="row" class="odd">
                  <td hidden="" class="sorting_1">68</td>
                  <td>102</td>
                  <td><a href="details-etudiant.html/idInsc/68">Sanni junior</a></td>
                  <td><a href="matricule.html">FALLC</a></td>
                  <td><span class="badge badge-danger">
                    5000 FCFA                    </span></td>
                  <td>              
                    <a href="http://localhost/SchoolGest/search-matricule.html?matricule=102" class="btn btn-secondary btn-sm text-white" data-tog="tooltip" data-placement="bottom" title="Faire un règlement">Ajouter un règlement</a>
                  </td>
                </tr></tbody>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table_info" role="status" aria-live="polite">Affichage de l'élément 1 à 3 sur 3 éléments</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table_previous"><a href="#" aria-controls="table" data-dt-idx="0" tabindex="0" class="page-link">Précédent</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table_next"><a href="#" aria-controls="table" data-dt-idx="2" tabindex="0" class="page-link">Suivant</a></li></ul></div></div></div></div>
          </div>
        </div>
      </div>
    </div>

    </section>
    
</section>
<!-- /.content -->
    <script>
    // Code JavaScript pour les papillons et le message
    document.addEventListener("DOMContentLoaded", function(event) {
      const alertMessage = document.querySelector(".alert-message");
      setTimeout(function() {
        alertMessage.classList.add("hide");
      }, 3000);
    });
  </script>

</main><!-- End  Gestion de la scolarité des étudiants #main -->


<?php
// Inclusion du fichier de template:
require_once '..' .PATH_ASIF .'app/commun/template.php';

?>







