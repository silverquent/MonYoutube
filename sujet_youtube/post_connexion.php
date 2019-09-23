<?php

session_start();


    // On se connecte à la BDD
try{
    $bdd = new PDO('mysql:host=localhost;dbname=monyoutube;charset=utf8', 'root', ''); // utilisateur root, mdp vide
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

    // On prepare une requete avec le pseudo en paramètre
$req = $bdd->prepare('SELECT * FROM users WHERE pseudo=?');
$req->execute(array(
        $_POST['pseudo'] // le paramètre est fourni depuis le champ du formulaire
    ));

$resultatPseudo = $req->fetch();
    // On affiche le resultat de la requete, si une ligne correspondant à la requete existe, elle va être affichée sinon c'est un false qui va s'afficher



    if($resultatPseudo !== false) // le resultat ne vaut pas false, donc il y a un utilisateur dans la BDD
    {





        if ( password_verify($_POST['mdp'], $resultatPseudo["password"] ) ){
            $_SESSION['connecte'] = true;
            $_SESSION['pseudo'] =  $_POST['pseudo'] ;
            header('Location: ajouter_video.php?messageconnecté=Vous etes connecté ');
            
        }else{

          header('Location: http://127.0.0.1/sujet_youtube/connexion.php?message1=Mauvais mot de passe');


      }


  }
    else // si le pseudo n'était pas dans la BDD
    {
        echo 'Le pseudo ' . $_POST['pseudo'] . ' n existe pas';
        header('Location: http://127.0.0.1/sujet_youtube/connexion.php?message=Pseudo inéxistant !!!');
    }

    ?>
