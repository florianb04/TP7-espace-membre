<?php

// delete the $_SESSION
session_destroy();

// make $_SESSION empty
$_SESSION=[];

// force to leave the profil after disconnection
header('location: index.php');

exit; // always use exit after header()

?>