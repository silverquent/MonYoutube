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
 <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" >MonYoutube </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://127.0.0.1/sujet_youtube/index">Accueil :</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://127.0.0.1/sujet_youtube/connexion">Connexion :</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://127.0.0.1/sujet_youtube/inscription">Inscription :</a>
  </li>
  
</ul>
<!-- Navbar content -->
</nav>
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
  <form action="post_connexion.php" method="POST">

    <div class="container-fluid">

      <div class="form-group">

        <label for="exampleInputEmail1">Titre de la vidéo :</label>
        <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre"> 
      </div>
        

   
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Description de la vidéo : </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
      <div class="form-group">
            <label for="miniature">Image miniature :</label>
            <input type="file" class="form-control-file" name ="miniature" id="miniature" required>
          </div>
        
  <button type="submit" class="btn btn btn-dark">Envoyer</button>
  </div> 
</div>
</div>
</form>
</body>
</html>