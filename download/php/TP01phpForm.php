<?php
//Déclaration de variables
$menu01="accueil";
$menu02="Sign in";
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
            <ul  class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#presentation"><?php echo $menu01;?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="boutique.php">Boutique</a>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Langue
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Anglais</a>
                        <a class="dropdown-item" href="#">Français</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="container">
            <form action="TP02Reponse.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPrenom">Prénom</label>
                        <input type="text" class="form-control" name="mon_champ[inputPrenom]" id="inputPrenom" placeholder="Prenom">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputNom">Nom</label>
                        <input type="text" class="form-control" name="mon_champ[inputNom]" id="inputNom" placeholder="Nom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" name="mon_champ[inputEmail]" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="inputAdresse">Adresse</label>
                    <input type="text" class="form-control" name="mon_champ[inputAdresse]" id="inputAdresse" placeholder="Adresse">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="inputCp">Code Postal</label>
                        <input type="text" class="form-control" id="inputCp" name="mon_champ[inputCp]">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputVille">Ville</label>
                        <input type="text" class="form-control" id="inputVille" name="mon_champ[inputVille]">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="mon_champ[gridCheck]">
                        <label class="form-check-label" for="gridCheck">
                            M'abonner à la newsletter
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo $menu02;?></button>
            </form>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>