<?php
//Si MDP1 == MDP2
if($_POST['mdp'] === $_POST['cmdp'])
{
   // Si MDP1 a au moins 8 caractères
  if(strlen($_POST['mdp']) > 8) 
  {
        // Si MDP1 contient un chiffre
    if(preg_match('/\d/', $_POST['mdp']) == true)
    {
                        // Si PSEUDO déjà présent dans la BDD
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=monyoutube;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
        die('Erreur : '.$e->getMessage());
      }

      $req = $bdd->prepare('SELECT * FROM users WHERE pseudo=?');
      $req->execute(array(
        $_POST['pseudo']
      ));
      $resultat = $req->fetch();
  if($resultat != false) //  Afficher Pseudo déjà utilisé
  {
    echo "Pseudo déjà utilisé";
    header('Location: http://127.0.0.1/sujet_youtube/inscription?messagepseudoutilisé=Pseudo déjà utilisé ');

    // Si Pseudo pas entré 
      if(!empty($_POST['pseudo'])){
        echo 'bien'; 
      }
else{
  header('Location: http://127.0.0.1/sujet_youtube/inscription?messagepasdepseudo=Pseudo a entrer ');
}
  }
  
 
  else{

                            // Insérer dans la BDD PSEUDO et hash de MDP1
    $req = $bdd->prepare('INSERT INTO users(ID, pseudo, password) VALUES (NULL, :pseudo, :mdp)');
    $req->execute(array(
      'pseudo' => htmlspecialchars($_POST['pseudo']),
      'mdp' => password_hash($_POST['mdp'], PASSWORD_DEFAULT)

    ));

    echo($_POST['pseudo']);
    echo($_POST['mdp']);


                            // Afficher Inscription faite
    echo 'Inscription faite';
    header('Location: http://127.0.0.1/sujet_youtube/connexion?messageinscription=inscription faite');
  }

}
        else // Afficher Le mot de passe doit contenir un chiffre
        {
          echo "Le mot de passe doit contenir un chiffre";
          header('Location: http://127.0.0.1/sujet_youtube/inscription?messagechiffre=Le mot de passe doit contenir un chiffre');
        }
      }
    else // Afficher Mot de passe trop court
    {
      echo "Mot de passe trop court";
      header('Location: http://127.0.0.1/sujet_youtube/inscription?messagecourt=Mot de passe trop court');
    }
  }
else // Afficher Mots de passe differents
{
  echo "Mots de passe differents";
  header('Location: http://127.0.0.1/sujet_youtube/inscription?messagedif=Mot de passe différent !!!!!');
  ;
}


?>