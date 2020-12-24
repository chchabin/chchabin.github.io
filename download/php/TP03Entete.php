<?php
//Déclaration de variables
$lang = array();
$menu01 = ['accueil' => 'TP03Accueil.php',
    'nos produits' => 'TP03Construction.php',
    'nous contacter' => 'TP02Form.php',
    'plan d\'accés' => 'TP03Construction.php',
    'qui sommes nous ?' => 'TP03Construction.php',
    'langage' => 'TP03Construction.php'];
$menu02 = ["home", "products", "contacts us", "find Us", "about us", "language"];
$form01 = "Valider";
$form02 = "Sign in";
$lang = $menu01;
// var_dump($_REQUEST);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?= basename(__File__) ?></title>
</head>
<body>
