<?php 

function getlogin($pseudo,$password)
    {
    global $errors;

        $bdd = getbdd();

        $req = $bdd->prepare('SELECT id,pseudo,password FROM users WHERE (pseudo = :pseudo OR email = :pseudo ) AND  active="1"'); 
        $req->execute(['pseudo'=>$pseudo]); // on viens recupere la valeur pseudo qui est dans la clef pseudo 
        
        $userHasBeenFound = $req -> rowCount();
        // echo 'COUCOU   '.$userHasBeenFound; exit; test intermédiaire 

        $utilisateur = $req->fetch(PDO::FETCH_OBJ) ; // on recupere sous forme d'objet

        if ($userHasBeenFound AND password_verify($password,$utilisateur->password)) // le mot de passe est vérifier ICI
            {
                $_SESSION['id_user'] = $utilisateur->id ;
                $_SESSION['pseudo'] = $utilisateur->pseudo ;
                
                header('location: ?page=profil');
                exit;
            }
        else {
            $errors[] = 'Erreur de login ou de Mot de passe <br/>';
        }










    }




?>