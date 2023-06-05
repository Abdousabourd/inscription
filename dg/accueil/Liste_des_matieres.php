<?php session_start();?>

<main id="main" class="main"><!-- Liste des Etudiants formuliare #main -->

    <div class="pagetitle">
    <h1>Liste des compositions</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">Accueil</a></li>
        <li class="breadcrumb-item">Compositions</li>
        <li class="breadcrumb-item active">Listes</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

   <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-10">
            <h1>Liste des compositions</h1>
        </div><!-- /.col -->
        <div class="col-sm-2">
            <button class="btn btn-primary btn-sm btn-block" data-tog="tooltip" data-placement="bottom" title="" data-toggle="modal" data-target="#addModal" data-original-title="Ajout une composition"><i class="fas fa-plus" aria-hidden="true"></i> Ajouter</button>
        </div>
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
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
                        <div id="table_etudiant_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="table_etudiant_length"><label>Afficher <select name="table_etudiant_length" aria-controls="table_etudiant" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> éléments</label></div></div><div class="col-sm-12 col-md-6"><div id="table_etudiant_filter" class="dataTables_filter"><label>Rechercher :<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table_etudiant"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="table_etudiant" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="table_etudiant_info">
                            <thead>
                                <tr role="row"><th scope="col" class="sorting_asc" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activer pour trier la colonne par ordre décroissant">#</th><th hidden="" scope="col" class="sorting" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-label="ID: activer pour trier la colonne par ordre croissant">ID</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-label="Libellé: activer pour trier la colonne par ordre croissant">Libellé</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-label="Date: activer pour trier la colonne par ordre croissant">Date</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-label="Actions: activer pour trier la colonne par ordre croissant">Actions</th></tr>
                            </thead>
                            <tfoot>
                                <tr><th scope="col" rowspan="1" colspan="1">#</th><th hidden="" scope="col" rowspan="1" colspan="1">ID</th><th scope="col" rowspan="1" colspan="1">Libellé</th><th scope="col" rowspan="1" colspan="1">Date</th><th scope="col" rowspan="1" colspan="1">Actions</th></tr>
                            </tfoot>
                            <tbody>
                                                                       
                                                                           
                                                                           
                                                                <tr role="row" class="odd">
                                            <td class="sorting_1">1</td>
                                            <td hidden="">1</td>
                                            <td>1e Examen</td>
                                            <td>2023-10-01</td>
                                            <td>
                                               <!-- <a href="http://localhost/SchoolGest/show-doc.html/idEtudiant/"><button type="button" data-tog="tooltip" data-placement="bottom" title="Voir les notes" class="btn btn-xs btn-warning text-white detailsBtn"  ><i class="fas fa-folder-open" aria-hidden="true"></i></button></a> -->
                                                <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-info text-white updateBtn" data-toggle="modal" data-target="#update" data-original-title="Modifier"><i class="fas fa-edit" aria-hidden="true"></i></button>
                                                <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                            </td>
                                       </tr><tr role="row" class="even">
                                            <td class="sorting_1">2</td>
                                            <td hidden="">2</td>
                                            <td>2e Examen</td>
                                            <td>2023-10-02</td>
                                            <td>
                                               <!-- <a href="http://localhost/SchoolGest/show-doc.html/idEtudiant/"><button type="button" data-tog="tooltip" data-placement="bottom" title="Voir les notes" class="btn btn-xs btn-warning text-white detailsBtn"  ><i class="fas fa-folder-open" aria-hidden="true"></i></button></a> -->
                                                <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-info text-white updateBtn" data-toggle="modal" data-target="#update" data-original-title="Modifier"><i class="fas fa-edit" aria-hidden="true"></i></button>
                                                <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                            </td>
                                       </tr><tr role="row" class="odd">
                                            <td class="sorting_1">3</td>
                                            <td hidden="">3</td>
                                            <td>3e Examen</td>
                                            <td>2023-10-03</td>
                                            <td>
                                               <!-- <a href="http://localhost/SchoolGest/show-doc.html/idEtudiant/"><button type="button" data-tog="tooltip" data-placement="bottom" title="Voir les notes" class="btn btn-xs btn-warning text-white detailsBtn"  ><i class="fas fa-folder-open" aria-hidden="true"></i></button></a> -->
                                                <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-info text-white updateBtn" data-toggle="modal" data-target="#update" data-original-title="Modifier"><i class="fas fa-edit" aria-hidden="true"></i></button>
                                                <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                            </td>
                                       </tr></tbody>
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table_etudiant_info" role="status" aria-live="polite">Affichage de l'élément 1 à 3 sur 3 éléments</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table_etudiant_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table_etudiant_previous"><a href="#" aria-controls="table_etudiant" data-dt-idx="0" tabindex="0" class="page-link">Précédent</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table_etudiant" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table_etudiant_next"><a href="#" aria-controls="table_etudiant" data-dt-idx="2" tabindex="0" class="page-link">Suivant</a></li></ul></div></div></div></div>
                    </div>
                    <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section></div><!-- /.container-fluid -->

<!-- /.content -->

<!-- addModal -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title">Ajouter une composition</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span style="color: white;" aria-hidden="true">×</span>
            </button>
        </div>
            <form id="form" action="http://localhost/SchoolGest/add-composition.html" method="POST">
                <div class="modal-body mt-3">

                    <div class="form-group">
                        <label for="annee">Libellé</label>
                        <input type="text" class="form-control" name="values[libelle]" id="libelle">
                    </div>
                    <div class="form-group">
                        <label for="annee">Date de composition</label>
                        <input type="date" class="form-control" name="values[date_comp]" id="date_comp">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="submit" value="Enregistrer" name="Enregistrer" id="btn" class="btn btn-block btn-outline-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end addModal -->

<!-- updateModal -->
<div class="modal fade" id="update">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header bg-warning">
            <h4 class="modal-title">Editer une filière</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span style="color: white;" aria-hidden="true">×</span>
            </button>
        </div>
        <form action="http://localhost/SchoolGest/update-composition.html" method="post" id="form_id">
            <div class="modal-body mt-3">
                <div class="form-group">
                    <label for="libelle">Libellé</label>
                    <input type="hidden" class="form-control" name="values[id]" value="" id="m_id">
                    <input type="text" class="form-control" name="values[libelle]" value="" id="m_libelle">
                </div>
                <div class="form-group">
                    <label for="date_comp">Date de composition</label>
                    <input type="date" class="form-control" name="values[date_comp]" id="m_date_comp">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="submit" value="Modifier" name="Modifier" class="btn btn-block btn-outline-warning">
            </div>
        </form>
        </div>
    </div>
</div>
<!-- end updateModal -->

<!-- deleteModal -->
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
                <p>Voulez vous vraiment supprimer cette composition ?</p>
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




</main>
<script>

$(document).ready(function () {
    $('.updateBtn').on('click', function(){

        $('#update').modal('show');

        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        // alert(data[1]);
        $('#m_id').val(data[1]);
        $('#m_libelle').val(data[2]);
        $('#m_date_comp').val(data[3]);


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
        document.getElementById("delete_id").href = "delete-composition.html/id/"+data[1];

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
    $("#table_etudiant").DataTable({
        "responsive": false,
        "autoWidth": false,
        "language" : {

            "sEmptyTable":     "Aucune composition n'est disponible pour le moment",
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
});</script>
<!-- End Liste des Etudiants #main --> 
<?php
// Inclusion du fichier de template:
require_once '..' .PATH_ASIF .'app/commun/template.php';
?>


