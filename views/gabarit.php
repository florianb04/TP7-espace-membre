<?php  require_once '_partials/_header.php';  ?> <!-- ********** HEADER ********** -->

<?php  require_once '_partials/_nav.php';  ?> <!-- ********** NAV ********** -->


<main role="main" class="container text-center">


<?php 

if (!empty($_SESSION['message_flash'])){
    echo $_SESSION['message_flash'] ;
    $_SESSION['message_flash'] = [];
} 


?>

<?= $contenu; ?>

</main><!-- /.container -->

<?php  require_once '_partials/_footer.php';  ?> <!-- ********** FOOTER ********** -->