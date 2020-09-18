<?php require_once 'models/modif_mdp.model.php' ; 


if (isset($_POST['modif_mdp'])  ) {
    if (not_empty(['last_password','new_password','new_confirm_password'])) { // the fiels are not empty

        $_POST=array_map("htmlspecialchars",$_POST);
        $_POST=array_map("trim",$_POST);
        extract($_POST,EXTR_SKIP);


        if (mb_strlen($new_password) < 8 ) { // size of fields are good
            $errors[]= 'le mot de passe doit contenir au minimum 8 caratères <br/>';
        }

        else if ( $new_password != $new_confirm_password ) { // password and confirm are equals
            $errors[]= 'les mots de passe sont différents <br/>';
        }


        if (count($errors) ==0 ) { 
            //errors array is empty so i can check old password
            
            if (modif_mdp($_SESSION['pseudo'], $last_password, $new_password) ) { // the function check if old password is correct
                // if password is correct
                message_flash('mot de passe modifié');
                header('location: ?page=profil');
                exit;
            }
            else {
                // else if old password NOT is correct
                $errors[]= 'ancien mot de passe incorrect <br/>';
            }

        }


    }
}


require_once 'views/modif_mdp.view.php' ;
?>