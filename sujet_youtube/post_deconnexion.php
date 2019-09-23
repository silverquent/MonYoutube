<?php

session_start(); // on va manipuler les $_SESSION

session_destroy(); // supprime le $_SESSION

echo "La variable SESSION est detruite, vous etes deconnecté";
header('Location: connexion.php?messagedeco=Vous êtes déconnecté !!!');

    ?>
