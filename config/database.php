<?php


function getbdd()
{
    try 
    { 
    // On se connecte à MySQL 
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', ''); 
    // active les erreurs PDO 
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // pour passer à l'UTF 8 
    $bdd -> exec("set names utf8"); 
    }

    catch(Exception $e) 
    {
        // En cas d'erreur, on affiche un message et on arrête tout 
        die('Erreur : '.$e->getMessage());
    }
    
    return $bdd;

}

?>