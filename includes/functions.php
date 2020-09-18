<?php





// fonction d'unicité
function is_already_in_use ($field,$value,$table)
    {
    $bdd=getbdd();

    $reponse = $bdd->prepare('SELECT id FROM '.$table.' WHERE '.$field.' = ? '); 
    $reponse->execute([$value]); 
    $count = $reponse->rowCount();
    
    return $count;
    }

// $type='success' is giving a default value if nothing is assigned to this value
function message_flash($message,$type='success') {
    $_SESSION['message_flash'] = '
        <div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
        '.$message.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>'
        ;

}




function activ_mail($name,$pseudo,$email)
    {
        // @ permet de masquer les erreurs de la fonctions mail
        $token=sha1($name.$pseudo.$email);
        if (@mail($email,'activation du compte','Activation du compte, veuillez cliquer sur :'.WEBSITE_URL.'?page=activation&pseudo='.$pseudo.'&token='.$token)    ) {
            message_flash("Un mail d'activation a été envoyé");
        }
        else {
            message_flash("Probleme d'envoi du mail d'activation","danger");
        }
    }





// teste si les champs ne sont pas vides
function not_empty ($tableau) {

    foreach ($tableau as $champ)
    {
        if (empty($_POST[$champ]) || trim($_POST[$champ])==""  )
        {
            return false;
        }
    }
    return true;
    
}


?>