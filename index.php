<?php 

session_start();
require_once 'config/database.php';
require_once 'config/constants.php';
require_once 'includes/functions.php';


$errors=[]; // initialisation du tableau contenant les erreurs

//index.php/?page=accueil
if (!empty($_GET['page']) && is_file('controllers/'.$_GET['page'].'.controller.php')   ) {
  //controllers/acceuil.php

  require_once 'controllers/'.$_GET['page'].'.controller.php';
  }

else {
  require_once 'controllers/acceuil.controller.php';
  }


?>








