<?php   ob_start();   ?>

<?php   require_once '_partials/_errors.php'  ?>



<h1>Espace membre </h1>

<?php echo 'Bonjour '.$_SESSION['pseudo'].' !!!'; ?>


<?php   $contenu = ob_get_clean() ?>

<?php  require_once 'views/gabarit.php';  ?> <!-- ********** GABARIT  ********** -->