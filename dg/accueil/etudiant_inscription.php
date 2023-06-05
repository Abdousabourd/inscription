<?php session_start();?>
    
<main id="main" class="main"> <!-- Inscription etudiant formuliare #main -->

        <div class="pagetitle">
        <h1>Etudiant inscription</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home">Accueil</a></li>
            <li class="breadcrumb-item">Etudiant </li>
            <li class="breadcrumb-item active">inscription/Ajouter</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
        <div class="row">

            <div class="card">
            <div class="card-body">
                

                <!-- Multi Columns Form -->
                <form class="row g-12">
                <div class="col-md-6">
                    <label for="inputName5" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="inputName5"placeholder=" Entrez Vôtre Nom">
                </div>
                <div class="col-md-6">
                    <label for="inputName5" class="form-label">Your Prenom</label>
                    <input type="text" class="form-control" id="inputName5"placeholder=" Entrez Vôtre Prénom">
                    
                    </div>
                    <div class="col-md-4">
                    <label for="date" class="form-label">Date de Naissance</label>
                    <input type="date" class="form-control "id="inputDate"placeholder="  Entrez Vôtre Date-de-Naissance">
                    </div>

                    
                <div class="col-md-4">
                    <label for="sexe" class="form-label">Sexe</label>
                    <select id="sexe" class="form-select">
                    <option selected="">Choisissez vôtre Sexe.</option>
                    <option>M</option>
                    <option>F</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="Lieu de Naissance" class="form-label">Lieu de Naissance</label>
                    <input type="text" class="form-control" id="Lieu de Naissance"placeholder="  Entrez Vôtre Lieu-de-Naissance">
                    </div>

                    <div class="col-md-4">
                    <label for="formFile" class="form-label">Image Upload</label>
                    <input class="form-control" type="file" id="formFile"placeholder=" Télechargez votre Image">
                    </div>
                <div class="col-md-4">
                    <label for="inputEmail5" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail5"placeholder="  Entrez Vôtre E-mail">
                    </div>
                <div class="col-md-4">
                    <label for="inputNumber" class="form-label">Numeros de Teléphone</label>
                    <input type="password" class="form-control" id="inputNumber"placeholder=" Entrez Numeros de Teléphone">
                </div>
                <div class="col-md-12">
                    <label for="inputFilière" class="form-label"> Choisissez la Filières</label>
                    <select id="inputFilière" class="form-select">
                    <option selected="" > Filières Disponible</option>
                    <option>Filière 01</option><option>Filière 02</option><option>Filière 03</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="date" class="form-label"> 1er Date D'Echéance</label>
                    <input type="date" class="form-control "id="inputDate"placeholder="  Entrez Vôtre Date-de-Naissance">
                    <input type="number" class="form-control my-2" name="mont_ech[echeance1]" placeholder="Montant à régler">  
                
                </div>
                <div class="col-md-4">
                    <label for="date" class="form-label">2er Date D'Echéance</label>
                    <input type="date" class="form-control "id="inputDate"placeholder="  Entrez Vôtre Date-de-Naissance">
                    <input type="number" class="form-control my-2"  name="mont_ech[echeance2]" placeholder="Montant à régler">  
                
                </div>
                <div class="col-md-4">
                    <label for="date" class="form-label">3er Date D'Echéance</label>
                    <input type="date" class="form-control "id="inputDate"placeholder="  Entrez Vôtre Date-de-Naissance">
                    <input type="number" class="form-control my-2"  name="mont_ech[echeance3]" placeholder="Montant à régler">     
                </div>


                

                <div class="modal-footer justify-content-between">
                    <input type="submit" value="Enrregistrer" name="creer" class="btn btn-block btn-outline-primary">
                </div>
            
                </form><!-- End Multi Columns Form -->

            </div>
            </div>

        </div>
        </section>

    </main>
 <main id="main" class="main">
        <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-10">
            <h1>Ajouter un étudiant</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.html">Tableau de bord</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ajouter un étudiant</li>
            </ol>
        </nav>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 shadow bg-white">
            <form action="ajouter-etudiant.html" method="POST" id="form_id">
                <div class="modal-body mt-3">
                    <div class="form-group">
                    <label for="matricule">Matricule  </label>
                    <div class="row">
                        <div class="form-group col-5">
                            <label for="nomEtudiant">Nom etudiant</label>
                            <input type="text" class="form-control"  name="values[nom]"  required> 
                                            
                        </div>
                        <div class="form-group col-7">
                            <label for="prenom">Prénom(s) etudiant</label>
                            <input type="text" class="form-control" name="values[prenom]" required>                     
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="telephone">Téléphone</label>
                            <input type="number" class="form-control"  name="values[telephone]" required>                     
                        </div>
                        <div class="form-group col-6">
                            <label for="sexe">Sexe</label>
                            <select class="custom-select" class="form-control" name="values[sexe]" required>
                                <option value="Masculin">Masculin</option>
                                <option value="Féminin">Féminin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="dateDeNaissance">Date de naissance</label>
                            <input type="date" class="form-control"  name="values[dateDeNaissance]" required>                     
                        </div>
                        <div class="form-group col-6">
                            <label for="lieuDeNaissance">Lieu de naissance</label>
                            <input type="text" class="form-control"  name="values[lieuDeNaissance]" required>                     
                        </div>
                       
                    </div>
                   
                    <div class="form-group" >
                        <label for="idClasse">Filières</label>
                        <select class="custom-select" class="form-control" name="values[code_fil]" >
                                                
                        </select>
                    </div>                 
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="mt_tranche1">Date d'échéance de la 1ère tranche<label>
                            <input type="date" class="form-control"  name="date_ech[echeance1]" >         

                            <input type="number" class="form-control my-2" name="mont_ech[echeance1]" placeholder="Montant à régler">             
                        </div>
                        <div class="form-group col-4">
                        <label for="date_ech2">Date d'échéance de la 2e tranche<label>
                            <input type="date" class="form-control"  name="date_ech[echeance2]" >   
                            <input type="number" class="form-control my-2"  name="mont_ech[echeance2]" placeholder="Montant à régler">             
                  
                        </div>
                        <div class="form-group col-4">
                        <label for="date_ech3">Date d'échéance de la 3e tranche<label>
                            <input type="date" class="form-control"  name="date_ech[echeance3]" > 
                            <input type="number" class="form-control my-2"  name="mont_ech[echeance3]" placeholder="Montant à régler">                                 
                        </div>
                    </div>
                
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="submit" value="Enrregistrer" name="creer" class="btn btn-block btn-outline-primary">
                </div>
            </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

           
           
        </div>
    </div>
</div>
<!-- end addModal -->
        
</main>
    <!-- End Inscription etudiant formuliar #main --> 
<?php
// Inclusion du fichier de template:
require_once '..' .PATH_ASIF .'app/commun/template.php';
?>

    

    
