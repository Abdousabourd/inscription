<?php session_start();?>


<!-- Contenu de la page -->
<main id="main" class="main">

<div class="pagetitle">
    <h1>Filière</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">accueil</a></li>
        <li class="breadcrumb-item active">Ajouter </li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
  <div class="col-sm-10">
      <h1>Liste des filières</h1>
  </div><!-- /.col -->
  <div class="col-sm-2">
      <button class="btn btn-primary btn-sm btn-block" data-tog="tooltip" data-placement="bottom" title="" data-toggle="modal" data-target="#addModal" data-original-title="Ajout une filière"><i class="fas fa-plus" aria-hidden="true"></i> Ajouter</button>
  </div>
</div><!-- /.row -->
</div><!-- /.container-fluid -->


<!-- /.content-header -->



<!-- Main content -->
<section class="content">
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card table-responsive">
              <div class="card-body">
                  <style>
                      td {
                          white-space: nowrap;
                      }
                  </style>
                  <div id="table_filiere_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="table_filiere_length"><label>Afficher <select name="table_filiere_length" aria-controls="table_filiere" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> éléments</label></div></div><div class="col-sm-12 col-md-6"><div id="table_filiere_filter" class="dataTables_filter"><label>Rechercher :<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table_filiere"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="table_filiere" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="table_filiere_info">
                      <thead>
                          <tr role="row"><th scope="col" class="sorting_asc" tabindex="0" aria-controls="table_filiere" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activer pour trier la colonne par ordre décroissant">#</th><th hidden="" scope="col" class="sorting" tabindex="0" aria-controls="table_filiere" rowspan="1" colspan="1" aria-label="Code : activer pour trier la colonne par ordre croissant">Code </th><th scope="col" class="sorting" tabindex="0" aria-controls="table_filiere" rowspan="1" colspan="1" aria-label="Libellé: activer pour trier la colonne par ordre croissant">Libellé</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_filiere" rowspan="1" colspan="1" aria-label="Frais de formation: activer pour trier la colonne par ordre croissant">Frais de formation</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_filiere" rowspan="1" colspan="1" aria-label="Actions: activer pour trier la colonne par ordre croissant">Actions</th></tr>
                      </thead>
                      <tfoot>
                          <tr><th scope="col" rowspan="1" colspan="1">#</th><th hidden="" scope="col" rowspan="1" colspan="1">Code </th><th scope="col" rowspan="1" colspan="1">Libellé</th><th scope="col" rowspan="1" colspan="1">Frais de formation </th><th scope="col" rowspan="1" colspan="1">Actions</th></tr>
                      </tfoot>
                      <tbody>
                                                          
                                                          
                                                          
                                                      <tr role="row" class="odd">
                              <td scope="col" class="sorting_1">1</td>
                              <td hidden="" scope="col">1</td>
                              <td scope="col">IG</td>
                              <td scope="col"> 10000</td>                                                                                                                                                             
                              <td>
                                  <!-- <a href="http://localhost/SchoolGest/show-doc.html/idEtudiant/"><button type="button" data-tog="tooltip" data-placement="bottom" title="Voir les notes" class="btn btn-xs btn-warning text-white detailsBtn"  ><i class="fas fa-folder-open" aria-hidden="true"></i></button></a>                             -->
                                  <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-warning text-white updateBtn" data-toggle="modal" data-target="#update" data-original-title="Modifier"><i class="fas fa-edit" aria-hidden="true"></i></button>
                                  <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                              </td>
                          </tr><tr role="row" class="even">
                              <td scope="col" class="sorting_1">2</td>
                              <td hidden="" scope="col">2</td>
                              <td scope="col">FASH</td>
                              <td scope="col"> 10000</td>                                                                                                                                                             
                              <td>
                                  <!-- <a href="http://localhost/SchoolGest/show-doc.html/idEtudiant/"><button type="button" data-tog="tooltip" data-placement="bottom" title="Voir les notes" class="btn btn-xs btn-warning text-white detailsBtn"  ><i class="fas fa-folder-open" aria-hidden="true"></i></button></a>                             -->
                                  <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-warning text-white updateBtn" data-toggle="modal" data-target="#update" data-original-title="Modifier"><i class="fas fa-edit" aria-hidden="true"></i></button>
                                  <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                              </td>
                          </tr><tr role="row" class="odd">
                              <td scope="col" class="sorting_1">3</td>
                              <td hidden="" scope="col">3</td>
                              <td scope="col">FALLC</td>
                              <td scope="col"> 10000</td>                                                                                                                                                             
                              <td>
                                  <!-- <a href="http://localhost/SchoolGest/show-doc.html/idEtudiant/"><button type="button" data-tog="tooltip" data-placement="bottom" title="Voir les notes" class="btn btn-xs btn-warning text-white detailsBtn"  ><i class="fas fa-folder-open" aria-hidden="true"></i></button></a>                             -->
                                  <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-warning text-white updateBtn" data-toggle="modal" data-target="#update" data-original-title="Modifier"><i class="fas fa-edit" aria-hidden="true"></i></button>
                                  <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                              </td>
                          </tr></tbody>  
                  </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table_filiere_info" role="status" aria-live="polite">Affichage de l'élément 1 à 3 sur 3 éléments</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table_filiere_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table_filiere_previous"><a href="#" aria-controls="table_filiere" data-dt-idx="0" tabindex="0" class="page-link">Précédent</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table_filiere" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table_filiere_next"><a href="#" aria-controls="table_filiere" data-dt-idx="2" tabindex="0" class="page-link">Suivant</a></li></ul></div></div></div></div>
              </div>
              <!-- /.card-body -->
              </div>
          </div>
      </div>
  </div>
</section></div>

<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title">Ajouter une filière</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span style="color: white;" aria-hidden="true">×</span>
            </button>
        </div>
        <form action="http://localhost/SchoolGest/add-filiere.html" method="POST" id="form_id">
            <div class="modal-body mt-3">
                <div class="form-group">
                    <label for="annee">Libellé</label>
                    <input type="lib_fil" class="form-control" name="values[lib_fil]" id="lib_fil">                  
                </div>
                <div class="form-group">
                    <label for="cout">Frais de scolarité</label>
                    <input type="number" class="form-control" name="values[cout]" id="cout">                   
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="submit" value="Créer" name="Créer" class="btn btn-block btn-outline-primary">
            </div>
        </form>
        </div>
    </div>
</div>

<div class="modal fade" id="update">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header bg-warning">
            <h4 class="modal-title">Editer une filière</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span style="color: white;" aria-hidden="true">×</span>
            </button>
        </div>
        <form action="http://localhost/SchoolGest/edit-filiere.html" method="post" id="form_id">
            <div class="modal-body mt-3">
                <div class="form-group">
                    <label for="annee">Libellé</label>
                    <div class="form-group">
                        <select class="form-control" name="values[code_fil]" id="m_lib_fil">
                                                <option value="1">IG</option>
                                                <option value="2">FASH</option>
                                                <option value="3">FALLC</option>
                                                </select>
                    </div>              
                </div>
                <div class="form-group">
                    <label for="cout">Frais de scolarité</label>
                    <input type="int" class="form-control" name="values[cout]" id="m_cout">                   
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="submit" value="Modifier" name="Modifier" class="btn btn-block btn-outline-warning">
            </div>
        </form>
        </div>
    </div>
</div>

<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-danger">
            <h4 class="modal-title">Suppression</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body mt-3">
            <div class="container">
                <p>Voulez vous vraiment supprimer cette filière ?</p>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="" id="delete_id"><button type="button" class="btn btn-block btn-outline-danger">Oui</button></a>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-block btn-outline-primary" data-dismiss="modal">Non</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>

$(document).ready(function () {
    $('.updateBtn').on('click', function(){

        $('#update').modal('show');

        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        // alert(data[5]);
        // $('#m_lib_fil').val(data[1]);
        $('#m_lib_fil').val(data[2]);
        $('#m_cout').val(data[3]);
        selectionner('#m_lib_fil', data[1]); 



    });
});

$(document).ready(function () {
    $('.deleteBtn').on('click', function(){

        $('#delete').modal('show');

        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        document.getElementById("delete_id").href = "delete-filiere.html/code_fil/"+data[1];

    });
});

$(function () {
    $('[data-tog="tooltip"]').tooltip()
});

function selectionner(selectId, optionValToSelect) {

    var selectElement = document.getElementById(selectId);
    var selectOptions = selectElement.options;
    for (var opt, j = 0; opt = selectOptions[j]; j++) {
        if (opt.value == optionValToSelect) {
            selectElement.selectedIndex = j;
            break;
        }
    }
}

$(document).ready(function () {
    bsCustomFileInput.init();
});

$(function () {
    $("#table_filiere").DataTable({
        "responsive": false,
        "autoWidth": false,
        "language" : {

            "sEmptyTable":     "Aucune filière n'est disponible pour le moment",
            "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
            "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
            "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "Afficher _MENU_ éléments",
            "sLoadingRecords": "Chargement...",
            "sProcessing":     "Traitement...",
            "sSearch":         "Rechercher :",
            "sZeroRecords":    "Aucun élément correspondant trouvé",
            "oPaginate": {
                "sFirst":    "Premier",
                "sLast":     "Dernier",
                "sNext":     "Suivant",
                "sPrevious": "Précédent"
            },
            "oAria": {
                "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
            },
            "select": {
                    "rows": {
                        "_": "%d lignes sélectionnées",
                        "0": "Aucune ligne sélectionnée",
                        "1": "1 ligne sélectionnée"
                    }
            }
        }
    });
});

</script>









    </div>
</section>

</main><!-- End main Title -->

<?php
// Inclusion du fichier de template:
require_once '..' .PATH_ASIF .'app/commun/template.php';
?>
