<?php
//Déclaration de variables
$menu01=["accueil","nos services","nous contacter","plan d'accés","qui sommes nous ?"];
$menu02=["home","services"];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?= basename(__File__)?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <ul class="navbar-nav"> 
	  <?php 
		
		for ($i= 0; $i < count($menu01); $i++) { 
	  ?>
            <li  class="nav-item">
				<a class="nav-link" href="#"><?php echo $menu01[$i];?></a>
			</li>  
       <?php     }//fin de la boucle ?>
      </ul>
   </nav>

    </body>
</html>