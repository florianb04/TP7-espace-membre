<?php require_once 'models/reset_mdp.model.php' ; 



if (!isset($_GET['pseudo']) && !isset($_GET['token'])  ) {
    header('location:index.php');
    exit;
}
else{

   // echo 'COUCOU JE SUIS LE TEST A1';

    if ( verif_token($_GET['pseudo'], $_GET['token'])   ) {

       // echo 'COUCOU JE SUIS LE TEST A2';

        if (isset($_POST['reset_mdp'])  ) {

            // echo 'COUCOU JE SUIS LE TEST A3';

            if (not_empty(['password','confirm_password'])) {

                // echo 'COUCOU JE SUIS LE TEST A4';
        
                $_POST=array_map("htmlspecialchars",$_POST);
                $_POST=array_map("trim",$_POST);
                extract($_POST,EXTR_SKIP);

                if (mb_strlen($password) < 8 ) {
                    $errors[]= 'le mot de passe doit contenir au minimum 8 caratères <br/>';
                }
        
                else if ( $password != $confirm_password ) {
                    $errors[]= 'les mots de passe sont différents <br/>';
                }

                if (count($errors) ==0 ) { 
                    //ici pas d'erreurs alors j'enregistre
                    
                    change_mdp($password,$_GET['pseudo']);
                    message_flash("mot de passe modifié");
                    header('location:?page=login');
                    exit;

                }
            }
        }
        

    }
    else{
        message_flash("Le lien de réinitialisation est incorrect",'danger');
        header('location:index.php');
        exit;
    }


}







require_once 'views/reset_mdp.view.php' ;
?>