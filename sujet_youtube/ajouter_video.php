<?php 
session_start(); ?>


  <!doctype html>
  <html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Quentube</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

  </head>
  <header>
    <?php include("menu.php"); ?>
</header>
<body>
 <?php 
 if(isset($_GET['messageconnecté']))
 {
  ?>
  <div class="alert alert-success" role="alert">
    <?php echo $_GET['messageconnecté']; ?>
  </div>
  <?php
}
?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">                   
    <h1 class="display-4">Envoyer une video !</h1>
    <p class="lead">Voici pouvez envoyer une vidéo de votre choix et sa mignature !!! </p>
  </div>
</div>
<form action="post_video.php" method="POST" enctype="multipart/form-data">

  <div class="container-fluid">

    <div class="form-group">

      <label for="titrevideo">Titre de la vidéo :</label>
      <input type="text" name="titrevideo" class="form-control" id="titrevideo" aria-describedby="emailHelp" placeholder="Titre"> 
    </div>



    <div class="form-group">
      <label for="descriptionvideo">Description de la vidéo : </label>
      <textarea class="form-control" id="descriptionvideo" rows="3" name="descriptionvideo"></textarea>
    </div>

    <div class="form-group">
      <label for="miniature">Image miniature :</label>
      <input type="file" class="form-control-file" name ="miniature" id="miniature" required>
    </div>
  
    <div class="form-group">
      <label for="video">Fichier vidéo :</label>
      <input type="file" class="form-control-file" name ="video" id="video" required>
    </div>
    
    <button type="submit" class="btn btn btn-dark">Envoyer</button>
  </div> 
</div>
</div>
</form>
</body>
</html>



