<?php 

function forget_mdp($email)
    {
    global $errors;

    $bdd = getbdd();

    $req = $bdd->prepare('SELECT * FROM users WHERE email = :email'); 
    $req->execute(['email'=>$email]); 
    
    $userHasBeenFound = $req -> rowCount();


    if ($userHasBeenFound) // le mot de passe est vérifier ICI
    {
        $utilisateur = $req->fetch(PDO::FETCH_OBJ) ; // on recupere sous forme d'objet
        
        forget_mdp_email($utilisateur->name,$utilisateur->pseudo,$utilisateur->email);
    }

    else {
        $errors[] = 'Le compte n\'existe pas <br/>';
    }
    
}

?>