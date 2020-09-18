<?php


function modif_mdp ($pseudo, $last_password, $new_password) {

    $bdd = getbdd();

    $req = $bdd->prepare('SELECT * FROM users WHERE pseudo = :pseudo'); 
    $req->execute(['pseudo'=>$pseudo]); // on recupere la valeur pseudo qui est dans la clef pseudo 

    $utilisateur = $req->fetch(PDO::FETCH_OBJ) ; // on recupere sous forme d'objet

    if ( password_verify($last_password,$utilisateur->password)) { 
        //if password write is same as in DB
        $req = $bdd->prepare('UPDATE users SET password =:password WHERE  pseudo = :pseudo'); 
        $req->execute(['password'=>password_hash($new_password,PASSWORD_DEFAULT),'pseudo'=>$pseudo] ); // on recupere la valeur pseudo qui est dans la clef pseudo 
    
        return TRUE;

    }
    else {
        return FALSE;
    }

}

?>