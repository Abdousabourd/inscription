<?php session_start();?>

<main id="main" class="main"> <!-- Inscription etudiant formuliare #main -->

<div class="pagetitle">
    <h1>Années Académiques</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">Accueil</a></li>
        <li class="breadcrumb-item">Années</li>
        <li class="breadcrumb-item active">Liste des années académiques</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <h1>Liste des années académiques</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <button class="btn btn-primary btn-sm btn-block" data-tog="tooltip" data-placement="bottom" title="" data-toggle="modal" data-target="#addModal" data-original-title="Ajout une année"><i class="fas fa-plus" aria-hidden="true"></i> Ajouter</button>
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
                            <div id="table_annee_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="table_annee_length"><label>Afficher <select name="table_annee_length" aria-controls="table_annee" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> éléments</label></div></div><div class="col-sm-12 col-md-6"><div id="table_annee_filter" class="dataTables_filter"><label>Rechercher :<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table_annee"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="table_annee" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="table_annee_info">
                                <thead>
                                    <tr role="row"><th scope="col" class="sorting_asc" tabindex="0" aria-controls="table_annee" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activer pour trier la colonne par ordre décroissant">#</th><th hidden="" scope="col" class="sorting" tabindex="0" aria-controls="table_annee" rowspan="1" colspan="1" aria-label="ID: activer pour trier la colonne par ordre croissant">ID</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_annee" rowspan="1" colspan="1" aria-label="Libellé: activer pour trier la colonne par ordre croissant">Libellé</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_annee" rowspan="1" colspan="1" aria-label="Etat: activer pour trier la colonne par ordre croissant">Etat</th><th scope="col" class="sorting" tabindex="0" aria-controls="table_annee" rowspan="1" colspan="1" aria-label="Actions: activer pour trier la colonne par ordre croissant">Actions</th></tr>
                                </thead>
                                <tbody>
                                                                    
                                                                    
                                                                    
                                                                <tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td hidden="">1</td>
                                        <td>2023</td>
                                        <td>
                                                                                          <a href="valider-annee.html/id/1"><span class="badge badge-info">En cours</span></a>
                                                                                   </td>
                                        <td>
                                            <!-- <button type="button" data-tog="tooltip" data-placement="bottom" title="Modifier" class="btn btn-xs btn-warning text-white updateBtn" data-toggle="modal" data-target="#update"><i class="fas fa-edit" aria-hidden="true"></i></button> -->
                                            <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">2</td>
                                        <td hidden="">2</td>
                                        <td>2024</td>
                                        <td>
                                                                                            <a href="valider-annee.html/id/2"><span class="badge badge-success">Terminé</span></a>
                                                                                   </td>
                                        <td>
                                            <!-- <button type="button" data-tog="tooltip" data-placement="bottom" title="Modifier" class="btn btn-xs btn-warning text-white updateBtn" data-toggle="modal" data-target="#update"><i class="fas fa-edit" aria-hidden="true"></i></button> -->
                                            <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">3</td>
                                        <td hidden="">3</td>
                                        <td>2025</td>
                                        <td>
                                                                                            <a href="valider-annee.html/id/3"><span class="badge badge-success">Terminé</span></a>
                                                                                   </td>
                                        <td>
                                            <!-- <button type="button" data-tog="tooltip" data-placement="bottom" title="Modifier" class="btn btn-xs btn-warning text-white updateBtn" data-toggle="modal" data-target="#update"><i class="fas fa-edit" aria-hidden="true"></i></button> -->
                                            <button type="button" data-tog="tooltip" data-placement="bottom" title="" class="btn btn-xs btn-danger deleteBtn" data-toggle="modal" data-target="#delete" data-original-title="Supprimer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th scope="col" rowspan="1" colspan="1">#</th><th hidden="" scope="col" rowspan="1" colspan="1">ID</th><th scope="col" rowspan="1" colspan="1">Libellé</th><th scope="col" rowspan="1" colspan="1">Etat</th><th scope="col" rowspan="1" colspan="1">Actions</th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table_annee_info" role="status" aria-live="polite">Affichage de l'élément 1 à 3 sur 3 éléments</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table_annee_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table_annee_previous"><a href="#" aria-controls="table_annee" data-dt-idx="0" tabindex="0" class="page-link">Précédent</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table_annee" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table_annee_next"><a href="#" aria-controls="table_annee" data-dt-idx="2" tabindex="0" class="page-link">Suivant</a></li></ul></div></div></div></div>
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
                <h4 class="modal-title">Ajouter une année</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span style="color: white;" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body mt-3">
            <form method="POST" action="http://localhost/SchoolGest/add-annee.html" id="form">
                <div class="row">
                                <div class="form-group">
                        <select class="form-control" id="annee" name="values[libelle]">
                            <option>Année</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                                <option value="2026">2026</option>
                                                                <option value="2027">2027</option>
                                                                <option value="2028">2028</option>
                                                                <option value="2029">2029</option>
                                                                <option value="2030">2030</option>
                                                                <option value="2031">2031</option>
                                                                <option value="2032">2032</option>
                                                                <option value="2033">2033</option>
                                                                <option value="2034">2034</option>
                                                                <option value="2035">2035</option>
                                                                <option value="2036">2036</option>
                                                                <option value="2037">2037</option>
                                                                <option value="2038">2038</option>
                                                                <option value="2039">2039</option>
                                                                <option value="2040">2040</option>
                                                                <option value="2041">2041</option>
                                                                <option value="2042">2042</option>
                                                                <option value="2043">2043</option>
                                                                <option value="2044">2044</option>
                                                                <option value="2045">2045</option>
                                                                <option value="2046">2046</option>
                                                                <option value="2047">2047</option>
                                                                <option value="2048">2048</option>
                                                                <option value="2049">2049</option>
                                                                <option value="2050">2050</option>
                                                                <option value="2051">2051</option>
                                                                <option value="2052">2052</option>
                                                                <option value="2053">2053</option>
                                                                <option value="2054">2054</option>
                                                                <option value="2055">2055</option>
                                                                <option value="2056">2056</option>
                                                                <option value="2057">2057</option>
                                                                <option value="2058">2058</option>
                                                                <option value="2059">2059</option>
                                                                <option value="2060">2060</option>
                                                                <option value="2061">2061</option>
                                                                <option value="2062">2062</option>
                                                                <option value="2063">2063</option>
                                                                <option value="2064">2064</option>
                                                                <option value="2065">2065</option>
                                                                <option value="2066">2066</option>
                                                                <option value="2067">2067</option>
                                                                <option value="2068">2068</option>
                                                                <option value="2069">2069</option>
                                                                <option value="2070">2070</option>
                                                                <option value="2071">2071</option>
                                                                <option value="2072">2072</option>
                                                                <option value="2073">2073</option>
                                                    </select>
                    </div>   
                </div>
                </form></div>
                <div class="modal-footer justify-content-between">
                <input type="submit" value="Créer" name="Créer" id="btn" class="btn btn-block btn-outline-primary">
                </div>
            
            
            </div>
        </div>
    </div>
    <!-- end addModal -->
    
    <!-- deleteModal -->
    <div class="modal fade" id="delete" style="display: none;" aria-hidden="true">
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
                    <p>Voulez vous vraiment supprimer cette année ?</p>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="delete-annee.html/id/1" id="delete_id"><button type="button" class="btn btn-block btn-outline-danger">Oui</button></a>
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
            // alert(data[1]);
            $('#m_id').val(data[1]);
            $('#m_libelle').val(data[2]);
            $('#m_etat').val(data[3]);
    
    
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
            document.getElementById("delete_id").href = "delete-annee.html/id/"+data[1];
    
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
        $("#table_annee").DataTable({
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
    



</main>
<?php
// Inclusion du fichier de template:
require_once '..' .PATH_ASIF .'app/commun/template.php';
?>