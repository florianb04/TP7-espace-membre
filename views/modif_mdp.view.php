<?php   ob_start();   ?>

<?php   require_once '_partials/_errors.php'  ?>



<h1>Modification mot de passe</h1>
<form method="POST" class="card card-body">


    <div class="form-group">
        <input type="password" class="form-control" name="last_password" placeholder="Votre ANCIEN mot de passe">
    </div>

    <div class="form-group">
        <input type="password" class="form-control" name="new_password" placeholder="Votre NOUVEAU mot de passe">
    </div>
    
    <div class="form-group">
        <input type="password" class="form-control" name="new_confirm_password" placeholder="Confirmer votre NOUVEAU Mot de passe">
    </div>
    

    <button type="submit" class="btn btn-primary" name="modif_mdp">Valiser le nouveau Mot de passe</button>

</form>



<?php   $contenu = ob_get_clean() ?>

<?php  require_once 'views/gabarit.php';  ?> <!-- ********** GABARIT  ********** -->