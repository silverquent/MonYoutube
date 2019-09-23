
<?php session_start(); ?>
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

  <div class="jumbotron jumbotron-fluid">
    <div class="container">                   
      <h1 class="display-4">Connexion !</h1>
      <p class="lead">Voici devez vous inscrire pour vous connecter !!! </p>
    </div>
  </div>
  <form action="post_connexion.php" method="POST">

    <div class="container-fluid">

      <div class="form-group">
  <?php 
      if(isset($_GET['messageinscription']))
      {
      ?>
      <div class="alert alert-success" role="alert">
        <?php echo $_GET['messageinscription']; ?>
      </div>
      <?php
      }
     ?>
        <label for="exampleInputEmail1">Pseudo :</label>
        <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer pseudo"> 
      </div>
        <?php 
      if(isset($_GET['message']))
      {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['message']; ?>
      </div>
      <?php
      }
     ?>
      

   
   <div class="form-group">
    <label for="Inputmdp">Mot de passe :</label>
    <input type="password" name="mdp" class="form-control" id="Inputmdp" placeholder=" Entrer Mot de passe">
  </div>
  
        <?php 
      if(isset($_GET['message1']))
      {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['message1']; ?>
      </div>
      <?php
      }
     ?>
      
  <button type="submit" class="btn btn btn-dark">Connnexion</button>
  </div> 
</div>
</div>
</form>
</body>
</html>