<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="?page=accueil">Home <span class="sr-only">(current)</span></a>
      </li>


      <?php if ( isset($_SESSION['id_user']) &&isset($_SESSION['pseudo'])  ) { ?>
      <!-- here we chose to show the passwordModification if the user is connected  -->

        <li class="nav-item">
          <a class="nav-link" href="?page=midif_mdp">Modif MDP</a>
        </li>
      
      <?php } else {  ?>
      <!-- here we chose to show the signIn and logIn if the user is NOT connected  -->

      <li class="nav-item">
        <a class="nav-link" href="?page=register">Inscription</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="?page=login">Connexion</a>
      </li>

      <?php } ?>

    </ul>
  </div>
</nav>