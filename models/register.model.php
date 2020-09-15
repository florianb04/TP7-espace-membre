<?php 


function register_users($name,$pseudo,$email,$password)
    {
        $bdd = getbdd();

        $req = $bdd->prepare('INSERT INTO users(name, pseudo, email, password) VALUES(:name,:pseudo, :email, :password)'); 
        $req->execute(array('name'=>$name, 'pseudo'=>$pseudo, 'email'=>$email,  'password'=>$password )); 
        
    }





?>