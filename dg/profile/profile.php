<?php
session_start();


if (isset($_SESSION['inscription-erreurs']) && !empty($_SESSION['inscription-erreurs'])) {
  $erreurs = $_SESSION['inscription-erreurs'];
}

if (isset($_SESSION['donnees-utilisateur']) && !empty($_SESSION['donnees-utilisateur'])) {
  $donnees = $_SESSION['donnees-utilisateur'];
}

include '..'.PATH_ASIF .'app/commun/fonction.php';
if(isset($_SESSION['utilisateur_connecter']) and !empty($_SESSION['utilisateur_connecter'])){
}
$user_connected = check_if_user_conneted();
  // die(var_dump($_SESSION['utilisateur_connecter']))

  if (!check_if_user_conneted()) {
    header('location: ' .PATH_ASIF .'dg/connexion/');  }
  

?>


<main id="main" class="main">
<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home">Acceuil</a></li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
       
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="<?=PATH_ASIF ?>public/NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            
            <h2><?= $_SESSION["utilisateur_connecter"][0]['nom']?> <?= $_SESSION["utilisateur_connecter"][0]['prenom']?></h2>
            <h3><?= $_SESSION["utilisateur_connecter"][0]['profile']?></h3>
          </div>
         
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

           
            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Modifier le profil</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Changer mot de passe</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Paramètres</button>
            </li>

            
            <li class="nav-item">
              <button class="nav-link " data-bs-toggle="tab" data-bs-target="#profile-overview">Aperçu</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade  profile-overview" id="profile-overview">
          
              <h5>Profil détails</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nom & Prénoms :</div>
                <div class="col-lg-9 col-md-8"> <?= $_SESSION["utilisateur_connecter"][0]['nom']?>  <?= $_SESSION["utilisateur_connecter"][0]['prenom']?> </div>
                
              </div>


              <div class="row">
                <div class="col-lg-3 col-md-4 label">Nom d'utilisateur :</div>
                <div class="col-lg-9 col-md-8"><?= $_SESSION["utilisateur_connecter"][0]['nom_utilisateur']?></div>
              </div>


              <div class="row">
                <div class="col-lg-3 col-md-4 label">Profile :</div>
                <div class="col-lg-9 col-md-8"><?= $_SESSION["utilisateur_connecter"][0]['profile']?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email :</div>
                <div class="col-lg-9 col-md-8"><?= $_SESSION["utilisateur_connecter"][0]['email']?></div>
              </div>

            </div>

            <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form action="<?=PATH_ASIF ?>dg/profile/modifier_profil" method="post">
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profil Image</label>
                  <div class="col-md-8 col-lg-9">
                    <img src="<?=PATH_ASIF ?>public/NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <div class="pt-2">
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>                        
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inscription-nom" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                  <div class="col-md-8 col-lg-9">
                  <input type="text" name="nom" id="inscription-nom" class="form-control" placeholder="Entrer votre nom " 
                  value="<?php if (isset($donnees["nom"]) && !empty($donnees["nom"])) 
                  {echo $donnees["nom"];} else {echo '';} ?><?= $_SESSION["utilisateur_connecter"][0]['nom']?>">
                    <span class="text-danger">
                    <?php

                  if (isset($erreurs["nom"]) && !empty($erreurs["nom"])) {
                      echo $erreurs["nom"];
                  }

                  ?>
                                                                  
                  </span>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inscription-prenom" class="col-md-4 col-lg-3 col-form-label">Prénoms</label>
                  <div class="col-md-8 col-lg-9">
                  <input type="text" name="prenom" id="inscription-prenom" class="form-control" placeholder="Entrer votre prénom " 
                    value="<?php if (isset($donnees["prenom"]) && !empty($donnees["prenom"])) 
                    {echo $donnees["prenom"];} else {echo '';} ?><?= $_SESSION["utilisateur_connecter"][0]['prenom']?>">
                      <span class="text-danger">
                      <?php

                    if (isset($erreurs["prenom"]) && !empty($erreurs["prenom"])) {
                        echo $erreurs["prenom"];
                    }

                    ?>
                                                                    
                    </span>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inscription-email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                  <input type="email" name="email" id="inscription-email" class="form-control" placeholder="Entrer votre Adresse Email" 
                  value="<?php if (isset($donnees["email"]) && !empty($donnees["email"])) 
                  {echo $donnees["email"];} else {echo '';} ?><?= $_SESSION["utilisateur_connecter"][0]['email']?>">
                    <span class="text-danger">
                    <?php

                  if (isset($erreurs["email"]) && !empty($erreurs["email"])) {
                      echo $erreurs["email"];
                  }

                  ?>
                                                                  
                  </span>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inscription-nom_utilisateur" class="col-md-4 col-lg-3 col-form-label">Nom d'utilisateur</label>
                  <div class="col-md-8 col-lg-9">
                  <input type="text" name="nom_utilisateur" id="inscription-nom_utilisateur" class="form-control" placeholder="Entrer votre nom d'utilisateur" 
                  value="<?php if (isset($donnees["nom_utilisateur"]) && !empty($donnees["nom_utilisateur"])) 
                  {echo $donnees["nom_utilisateur"];} else {echo '';} ?><?= $_SESSION["utilisateur_connecter"][0]['nom_utilisateur']?>">
                    <span class="text-danger">
                    <?php

                  if (isset($erreurs["nom_utilisateur"]) && !empty($erreurs["nom_utilisateur"])) {
                      echo $erreurs["nom_utilisateur"];
                  }

                  ?>
                                                                  
                  </span>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="profile" class="col-md-4 col-lg-3 col-form-label">Profile</label>
                  <div class="col-md-8 col-lg-9">
                  <input type="text" name="profile" id="inscription-profile" class="form-control" placeholder="Entrer votre profile d'utilisateur" 
                  value="<?php if (isset($donnees["profile"]) && !empty($donnees["profile"])) 
                  {echo $donnees["profile"];} else {echo '';} ?><?= $_SESSION["utilisateur_connecter"][0]['profile']?>">
                    <span class="text-danger">
                    <?php

                  if (isset($erreurs["profile"]) && !empty($erreurs["profile"])) {
                      echo $erreurs["profile"];
                  }

                  ?>
                                                                  
                  </span>
                  </div>
                </div>

                

                <div class="row mb-3">
                  <label for="inscription-mot_passe" class="col-md-4 col-lg-3 col-form-label">Mot de passe</label>
                  <div class="col-md-8 col-lg-9">
                  <input type="password" name="mot_passe" id="inscription-mot_passe" 
                    class="form-control" placeholder="Veuillez entrer votre mot de passe" 
                    value="<?php if (isset($donnees["mot_passe"]) && !empty($donnees["mot_passe"]))
                    {echo $donnees["mot_passe"];
                    } else {echo ''; } ?>">
                    <span class="text-danger">
                    <?php 
                      if (isset($erreurs["mot_passe"]) && !empty($erreurs["mot_passe"])) {
                        echo $erreurs["mot_passe"];
                    }
                    ?>
                </span>
                  </div>
                </div>


                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
              </form>
              <!-- End Profile Edit Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-settings">

              <!-- Settings Form -->
              <form>

                <div class="row mb-3">
                  <label for="parametre" class="col-md-4 col-lg-3 col-form-label">Paramètres du compte</label>
                  <div class="col-md-8 col-lg-9">
                    <div>
                    <a class="dropdown-item d-flex align-items-center" href="<?=PATH_ASIF ?>dg/profile/traitement_desactivation">
                      <i class="bi bi-x-octagon-fill" ></i>
                      <span style="margin-left: 10px;"> Désactiver votre compte</span>
                    </a>
                    </div>
                    
                    
                    <div class="mt-3">
                    <a class="dropdown-item d-flex align-items-center" href="<?=PATH_ASIF ?>dg/profile/supprimer">
                      <i class="bi bi-trash-fill" ></i>
                      <span style="margin-left: 10px;"> Supprimer votre compte</span>
                    </a>
                    </div>
                  </div>
                </div>

              </form>
              <!-- End settings Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form action="<?=PATH_ASIF ?>dg/profile/traitement_password" method="post">
    <h5 style=" text-align:center; "> Sachez qu'après le changement de votre mot de passe vous serez déconnecté(e).</h5><br>
                
                <div class="row mb-3">
                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label" >Mot de passe actuel</label>
                  <div class="col-md-8 col-lg-9">
                  <input type="password" name="password"id="currentPassword" class="form-control" 
                   placeholder="Entrer votre mot de passe actuel" 
                    value="<?php if (isset($donnees["password"]) && !empty($donnees["password"])) {
                                      echo $donnees["password"];
                                          } else {
                                                            echo '';
                                                             } ?>">
                                            <span class="text-danger">
                                                <?php

                                                if (isset($erreurs["password"]) && !empty($erreurs["password"])) {
                                                    echo $erreurs["password"];
                                                }

                                                ?>
                                            </span>
                   
                  </div>


                </div>

                <div class="row mb-3">
                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nouveau Mot de passe</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="newpassword" type="password" class="form-control" placeholder="Veuillez entrer votre nouveau mot de passe"
                     id="newPassword">
                    <span class="text-danger">
                      <?php
                      if (isset($erreurs["newpassword"]) && !empty($erreurs["newpassword"])) {
                        echo $erreurs["newpassword"];
                      }
                      ?>
                    </span>
                  </div>

                </div>

                <div class="row mb-3">
                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Retaper Nouveau Mot de passe</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="renewpassword" type="password" class="form-control" placeholder="Veuillez retaper votre nouveau mot de passe"
                     id="renewPassword">
                    <span class="text-danger">
                      <?php
                      if (isset($erreurs["renewpassword"]) && !empty($erreurs["renewpassword"])) {
                        echo $erreurs["renewpassword"];
                      }
                      ?>
                    </span>
                  </div>

                </div>

                <div style="text-align: center;">
                  <button type="submit" name="change_password" class="btn btn-primary text-center"> Changer mot de passe</button>
                </div>
              </form>

              

              <!-- End Change Password Form -->

              

            </div>

          </div>
          <!-- End Bordered Tabs -->

        </div>
      </div>

    
    </div>
      
  </div>
</section>

</main>

<!-- End #main -->

<!-- End utilisateur Profile #main -->
  <?php
// Inclusion du fichier de template:
require_once '..' .PATH_ASIF .'app/commun/template.php';
?>


