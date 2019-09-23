<?php session_start();
?>


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
 
   <?php 
      if(isset($_GET['messagedeco']))
      {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['messagedeco']; ?>
      </div>
      <?php
      }
     ?>
<?php include("menu.php"); ?>
</header>
<body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Inscription !</h1>
      <p class="lead">Vous pouvez vous inscrire pour envoyer des vidéos </p>
    </div>

  </div>
  <form action="post_inscription.php" method="POST" enctype="multipart/form-data">

<div class="container-fluid">
    <div class="form-row">
      <div class="form-group col-md-12">
        
       <!--Pseudo -->
       <label for="inputpseudo"> Pseudo : </label>
       <input type="text" name="pseudo" class="form-control" id="inputPseudo" placeholder="Pseudo :">
       <div class="valid-form">
        <?php 
      if(isset($_GET['messagepseudoutilisé']))
      {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['messagepseudoutilisé']; ?>
      </div>
      <?php
      }
     ?>
 <?php 
      if(isset($_GET['messagepasdepseudo']))
      {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['messagepasdepseudo']; ?>
      </div>
      <?php
      }
     ?>


        Choississez un pseudo
      </div>
    </div>
    <!--Mot de passe -->  
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputmdp">Mot de passe :</label>
      <input type="password" name="mdp" class="form-control" id="inputmdp" placeholder="" value=" ">
      <div class="valid-form">
        Choississez un mot de passe 
      </div>
        <?php 
      if(isset($_GET['messagedif']))
      {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['messagedif']; ?>
      </div>
      <?php
      }
     ?>
      <?php 
      if(isset($_GET['messagechiffre']))
      {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['messagechiffre']; ?>
      </div>
      <?php
      }
     ?>
       <?php 
      if(isset($_GET['messagecourt']))
      {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['messagecourt']; ?>
      </div>
      <?php
      }
     ?>
    </div>    
  </div>
  <!--Confirmation mot de passe -->
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputcmdp">Confirmation mot de passe  : </label>
      <input type="password" name="cmdp" class="form-control" id="inputcmdp" placeholder="Confirmation mot de passe : ">
       <?php 
      if(isset($_GET['messagechiffre']))
      {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['messagechiffre']; ?>
      </div>
      <?php
      }
     ?>
        <?php 
      if(isset($_GET['messagecourt']))
      {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['messagecourt']; ?>
      </div>
      <?php
      }
     ?>
       <?php 
      if(isset($_GET['messagedif']))
      {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['messagedif']; ?>
      </div>
      <?php
      }
     ?>
    </div>

  </div>

  

    <button type="submit" class="btn btn-dark">Envoyer</button>
  </div>
</div>
</form>
<? var_dump($_SESSSION); ?>
</body>
</html>