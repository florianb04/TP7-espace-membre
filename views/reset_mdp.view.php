<?php   ob_start();   ?>

<?php   require_once '_partials/_errors.php'  ?>



<h1>Réinitialisation du mot de passe</h1>
<form method="POST" class="card card-body">

    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Votre Mot de passe">
    </div>

    <div class="form-group">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirmation de Mot de passe">
    </div>

    <button type="submit" class="btn btn-primary" name="reset_mdp">Réinitialisation du mot de passe</button>

</form>



<?php   $contenu = ob_get_clean() ?>

<?php  require_once 'views/gabarit.php';  ?> <!-- ********** GABARIT  ********** -->