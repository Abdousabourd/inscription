<?php session_start();?>

<main id="main" class="main"><!-- Liste des Etudiants formuliare #main -->

        <div class="pagetitle">
        <h1>Liste des Etudiants</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home">Accueil</a></li>
            <li class="breadcrumb-item">Etudiants</li>
            <li class="breadcrumb-item active">Listes</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

   
        <section class="section profile">
        <div class="row">

        
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
                                <tr role="row"><th hidden="" scope="col" class="sorting_asc" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activer pour trier la colonne par ordre décroissant">ID</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-label="Matricule: activer pour trier la colonne par ordre croissant">Matricule</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-label="Nom: activer pour trier la colonne par ordre croissant">Nom</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-label="Prenom(s): activer pour trier la colonne par ordre croissant">Prenom(s)</th><th hidden="" scope="col" class="sorting" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-label="Téléphone: activer pour trier la colonne par ordre croissant">Téléphone</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-label="Filiere: activer pour trier la colonne par ordre croissant">Filiere</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_etudiant" rowspan="1" colspan="1" aria-label="Actions: activer pour trier la colonne par ordre croissant">Actions</th></tr>
                            </thead>
                            <tbody>
                                                                
                                                                
                                                                
                                                            <tr role="row" class="odd">
                                    <td hidden="" class="sorting_1">66</td>
                                    <td>100</td>
                                    <td>LAFIA</td>
                                    <td>Mouminatou</td>
                                    <td hidden="">96281634</td>
                                    <td>FASH</td>
                                    <td>
                                        <a href="http://localhost/SchoolGest/details-etudiant.html/idInsc/66"><button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-warning text-white detailsBtn" data-original-title="Voir les détails de l'étudiant"><i class="fas fa-folder-open" aria-hidden="true"></i></button></a>                            
                                        <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-info text-white updateBtn" data-toggle="modal" data-target="#update" data-original-title="Modifier"><i class="fas fa-edit" aria-hidden="true"></i></button>
                                        <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr><tr role="row" class="even">
                                    <td hidden="" class="sorting_1">67</td>
                                    <td>101</td>
                                    <td>IDRISSOU F</td>
                                    <td>Abdou Sabourd</td>
                                    <td hidden="">61816049</td>
                                    <td>IG</td>
                                    <td>
                                        <a href="http://localhost/SchoolGest/details-etudiant.html/idInsc/67"><button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-warning text-white detailsBtn" data-original-title="Voir les détails de l'étudiant"><i class="fas fa-folder-open" aria-hidden="true"></i></button></a>                            
                                        <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-info text-white updateBtn" data-toggle="modal" data-target="#update" data-original-title="Modifier"><i class="fas fa-edit" aria-hidden="true"></i></button>
                                        <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr><tr role="row" class="odd">
                                    <td hidden="" class="sorting_1">68</td>
                                    <td>102</td>
                                    <td>Sanni</td>
                                    <td>junior</td>
                                    <td hidden="">61816049</td>
                                    <td>FALLC</td>
                                    <td>
                                        <a href="http://localhost/SchoolGest/details-etudiant.html/idInsc/68"><button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-warning text-white detailsBtn" data-original-title="Voir les détails de l'étudiant"><i class="fas fa-folder-open" aria-hidden="true"></i></button></a>                            
                                        <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-info text-white updateBtn" data-toggle="modal" data-target="#update" data-original-title="Modifier"><i class="fas fa-edit" aria-hidden="true"></i></button>
                                        <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr></tbody>
                            <tfoot>
                                <tr><th hidden="" scope="col" rowspan="1" colspan="1">ID</th><th scope="col" rowspan="1" colspan="1">Matricule</th><th scope="col" rowspan="1" colspan="1">Nom</th><th scope="col" rowspan="1" colspan="1">Prenom(s)</th><th hidden="" scope="col" rowspan="1" colspan="1">Téléphone</th><th scope="col" rowspan="1" colspan="1">Filiere</th><th scope="col" rowspan="1" colspan="1">Actions</th></tr>
                            </tfoot>
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table_etudiant_info" role="status" aria-live="polite">Affichage de l'élément 1 à 3 sur 3 éléments</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table_etudiant_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table_etudiant_previous"><a href="#" aria-controls="table_etudiant" data-dt-idx="0" tabindex="0" class="page-link">Précédent</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table_etudiant" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table_etudiant_next"><a href="#" aria-controls="table_etudiant" data-dt-idx="2" tabindex="0" class="page-link">Suivant</a></li></ul></div></div></div></div>
                    </div>
                    <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->



<!-- updateModal -->
<div class="modal fade" id="update">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header bg-warning">
            <h4 class="modal-title">Editer un étudiant</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span style="color: white;" aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="update-etudiant.html" method="post" id="form_id">
            <div class="modal-body mt-3">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="values[id]" id="m_id" >                                 
                    <input type="hidden" class="form-control" name="values[matricule]" id="m_matricule" >                                 
                </div>
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label for="nom">Nom</label>
                        <input type="int" class="form-control" name="values[nom]" id="m_nom">                   
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="mont_tranch1">Prénom(s)</label>
                        <input type="int" class="form-control" name="values[prenom]" id="m_prenom">                   
                    </div>
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="number" class="form-control" name="values[telephone]" id="m_telephone">                   
                </div>
                <div class="form-group">
                    <label for="filiere">Choisir une filière...</label>
                    <select class="form-control" name="values[code_fil]" id="m_code_fil" required>
                    
                    </select>
                  
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
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mt-3">
            <div class="container">
                <p>Voulez vous vraiment supprimer cet étudiant ?</p>
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
 </div>
</section>

</main><!-- End Liste des Etudiants #main -->

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
        $('#m_id').val(data[0]);
        $('#m_matricule').val(data[1]);
        $('#m_nom').val(data[2]);
        $('#m_prenom').val(data[3]);
        $('#m_telephone').val(data[4]);
        selectionner('#m_code_fil', data[5]);       

    });
});

$(document).ready(function () {
    $('.deleteBtn').on('click', function(){

        $('#deleteModal').modal('show');

        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        document.getElementById("delete_id").href = "delete-etudiant.html/id/"+data[0];

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

            "sEmptyTable":     "Aucun étudiant n'est disponible pour cette année",
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
    
<!-- End Liste des Etudiants #main --> 
<?php
// Inclusion du fichier de template:
require_once '..' .PATH_ASIF .'app/commun/template.php';
?>

    
