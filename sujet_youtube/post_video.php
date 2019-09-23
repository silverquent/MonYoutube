<?php







try
{
  $bdd = new PDO('mysql:host=localhost;dbname=monyoutube;charset=utf8', 'root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

 //Vérifier si image 
if(isset($_FILES['miniature']) && $_FILES['miniature']['error'] == 0){
  if($_FILES['miniature']['size'] < 1000000){

        //taillle fichier < 1 mega octet
    $infosNomFichier = pathinfo($_FILES['miniature']['name']);
    $extension = $infosNomFichier['extension'];
    echo "L'extension du fichier envoyé est : " . $extension;

// Vérifier que l'extesion est bien un jpg
    
    $extensionAutorisees = array("png" ,"gif" ,"jpg", "jpeg" , "tiff");

    if(in_array(strtolower($extension), $extensionAutorisees) === true){

      echo " <br> ;
      Fichier avec bonne extension
      <br>";


//Vérifier si video
      if(isset($_FILES['video']) && $_FILES['video']['error'] == 0){
        if($_FILES['miniature']['size'] < 1000000){
        //taillle fichier < 1 mega octet
          $infosNomFichier1 = pathinfo($_FILES['video']['name']);
          $extension1 = $infosNomFichier1['extension'];
          echo "L'extension du fichier envoyé est :  " . $extension1;
          echo "<br>";


          // Vérifier que l'extesion video 
          $extensionAutorisees1 = array("avi" ,"mp4" ,"rm", "mov" , "wmf");



          if(in_array(strtolower($extension1), $extensionAutorisees1) === true){    



           

           // Insérer dans la titre et description 
            $req = $bdd->prepare('INSERT INTO videos(ID, name, description) VALUES (NULL, :name, :description)');
            $req->execute(array(
              'name' => htmlspecialchars($_POST['titrevideo']),
              'description' => htmlspecialchars($_POST['descriptionvideo'])


            ));
 $idDernierElementInsere = $bdd->LastInsertId();
            echo $idDernierElementInsere;


            move_uploaded_file($_FILES['video']['tmp_name'], 'upload/video/video' . $idDernierElementInsere . '.'.pathinfo($_FILES['video']['name'])['extension']);

            move_uploaded_file($_FILES['miniature']['tmp_name'], 'upload/image/miniature' . $idDernierElementInsere  . '.'.pathinfo($_FILES['miniature']['name'])['extension']);

            echo "Fichier sauvegardé";






          }
          else  {
            echo"la video  n'est pas une extension autorisée <br>";
          }
        }
        else  {
          echo"la video  n'est pas une extension autorisée <br>";
        }
      }
      else {
        echo"Vous n'avez pas choisi de video !";
      }
    }
    else  {
      echo"le fichier n'est pas une extension autorisée <br>";
    }
  }
  else {
    echo"Le fichier doit peser moins de 1 mega octet";
  }
}
else {echo"Vous n'avez pas choisi d'image !";
}

?>

