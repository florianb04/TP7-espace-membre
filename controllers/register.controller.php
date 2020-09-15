<?php require_once 'models/register.model.php' ?>

<?php //print_r($_POST); exit; ?>


<?php 

if (isset($_POST['register']) ) {
    
    if (not_empty(['name','pseudo','email','password','confirm_password'])) {
        
        $_POST=array_map("htmlspecialchars",$_POST);
        $_POST=array_map("trim",$_POST);
        extract($_POST,EXTR_SKIP);

        if (mb_strlen($name) > 30 ) {
            $errors[]= 'le nom peut contenir 30 caratères maximum <br/>';
        }

        if (mb_strlen($pseudo) < 6 ) {
            $errors[]= 'le pseudo doit contenir au minimum 6 caratères <br/>';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Le champ email n\'est pas valide <br/>';
        }

        if (mb_strlen($password) < 8 ) {
            $errors[]= 'le mot de passe doit contenir au minimum 8 caratères <br/>';
        }

        else if ( $password != $confirm_password ) {
            $errors[]= 'les mots de passe sont différents <br/>';
        }

        if (is_already_in_use('pseudo',$pseudo,'users')) {
            $errors[]= 'le pseudo est déjà utilisé <br/>';
        }

        if (is_already_in_use('email',$email,'users')) {
            $errors[]= 'l\'email est déjà utilisé <br/>';
        }



        if (count($errors) ==0 ) { 
            //ici pas d'erreurs alors j'enregistre
            $password = password_hash($password, PASSWORD_DEFAULT);
            
            activ_mail($name,$pseudo,$email);
            
            
            
            register_users($name,$pseudo,$email,$password);




        }

    }

    else { 
        $errors[]= 'veuillez remplir tout les champs <br/>';
    }

}


// aaaaaaaaa

?>




<?php require_once 'views/register.view.php'; ?>