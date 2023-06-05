<div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form action="<?=PATH_ASIF ?>dg/profile/traitement_password" method="post">
              <h5 style=" text-align:center; "> Sachez qu'après le changement de votre mot de passe vous serez déconnecté(e).</h5>
                <br>
<div class="col-lg-12 mt-5">
          <h5 style="margin-bottom: 13px; font-size: 32px; font-weight: 700; color: #cda45e;">Changement de mot de passe</h5>
          <div class="card">
            <div class="card-body">
              <form action="<?=PATH_ASIF ?>dg/profil/traitement_password" method="post" enctype="multipart/form-data">
                <h5 style="color: #cda45e; text-align:center; "> Sachez qu'après le changement de votre mot de passe vous serez déconnecté(e).</h5>
                <br>
                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label" require>Mot de passe actuel</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" placeholder="Veuillez entrer votre mot de passe actuel" id="currentPassword">
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
                    <input name="newpassword" type="password" class="form-control" placeholder="Veuillez entrer votre nouveau mot de passe" id="newPassword" title="Votre mot de passe doit contenir au moins 8 caractères
                           avec au moins une lettre majuscule et une letttre miniscule." required>
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
                    <input name="renewpassword" type="password" class="form-control" placeholder="Veuillez retaper votre nouveau mot de passe" id="renewPassword" title="Votre mot de passe doit contenir au moins 8 caractères
                           avec au moins une lettre majuscule et une letttre miniscule." required>
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
            </div>
          </div>
        </div>