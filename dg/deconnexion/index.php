
  <?php
  //Vous pouvez mettre le code pour vérifier si l'utilisateur est connecté dans le fichier de
  // déconnexion avant de détruire la session. Cela garantira que la session n'est détruite que si l'utilisateur est connecté.
  // Voici un exemple de code :
  session_start();

      // Détruire la session
  
      session_destroy();


  // Rediriger l'utilisateur vers la page de connexion
  header('location: ' .PATH_ASIF .'dg/connexion/');
  exit; 
  ?>


 