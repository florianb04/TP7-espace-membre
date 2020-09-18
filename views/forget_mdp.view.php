<?php   ob_start();   ?>

<?php   require_once '_partials/_errors.php'  ?>



<h1>Mot de passe oublié </h1>
<form method="POST" class="card card-body">

    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Votre email">
    </div>

    <button type="submit" class="btn btn-primary" name="forget_mdp">Réinitialiser son mot de passe</button>

</form>




<?php   $contenu = ob_get_clean() ?>

<?php  require_once 'views/gabarit.php';  ?> <!-- ********** GABARIT  ********** -->