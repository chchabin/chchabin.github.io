<?php
//Déclaration de variables
$id=["accueil","produits","contacts","plan","quisommesnous"];
$français=["accueil","nos produits","nous contacter","plan d'accés","qui sommes nous ?"];
$anglais=["home","servecices"];
//Déclaration de variables
			$menu01="HOME";
			$menu02="SERVICES";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tp01 - Menu</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <ul class="navbar-nav"> 
        <li>
          <a class="nav-link" href="#presentation"><?php echo $menu01;?></a>
        </li>
        <li>
          <a class="nav-link" href="#produits">nos produits</a>
        </li>
        <li>
          <a class="nav-link" href="#contacts">Nous contacter</a>
        </li>
        <li>
          <a class="nav-link" href="#plan">Plan d'accès</a>
        </li>
        <li>
          <a class="nav-link" href="#quiSommesnous">Qui sommes-nous ?</a>
        </li>
      </ul>
   </nav>

    </body>
</html>