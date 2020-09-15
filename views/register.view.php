<?php   ob_start();   ?>

<?php   require_once '_partials/_errors.php'  ?>



<h1>Inscription</h1>
<form method="POST" class="card card-body">

    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Votre nom">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="pseudo" placeholder="Votre pseudo">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Votre email">
    </div>

    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Votre Mot de passe">
    </div>
    
    <div class="form-group">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirmer votre mot de passe">
    </div>

    <button type="submit" class="btn btn-primary" name="register">Inscription</button>

</form>



<?php   $contenu = ob_get_clean() ?>

<?php  require_once 'views/gabarit.php';  ?> <!-- ********** GABARIT  ********** -->