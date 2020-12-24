<?php
//Déclaration de variables
$id=array("accueil","services","contacts","plan","quisommesnous");
$francais=array("accueil","nos services","nous contacter","plan d'accés","qui sommes nous ?");
$anglais=array("home","services");

?>
<!DOCTYPE html>
<html>
<head>
	<title>TP02phpMenu</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<style type="text/css"> 
    
    /* Placez ici les directives CSS */ 
  

/************* Gestion de la présentation (layout) ************ */
		/* Positionnement en ligne des li */
	.nav{
	  display: flex;
	  flex-direction: row;/* */
	  flex-wrap: wrap;/* */
	  justify-content: flex-start;/*  */
	  align-items: stretch;/* */
	}
	.nav a{
		display: block;/* */
	}

		/* ************ Gestion des styles ************ */
	.nav{
		list-style-type : none;/*  */
		margin: 0;
		padding: 0;
		background: #00c7f0; 
	}
	.nav li a{
		text-decoration: none;/*   */
		padding: 1em;/*   */
		color: white;
		text-transform: uppercase;/*  */
		letter-spacing: .09em;/*  */
	}
	.nav a:hover {
		background: #00b7f5;/*   */
	}


  </style>
</head>

<body>
<nav>
      <ul class="nav">
        <li>
          <a href="#presentation"><?php echo $francais[0];?></a>
        </li>
        <li>
          <a href="#services"><?php echo $francais[1];?></a>
        </li>
        <li>
          <a href="#contacts">Nous contacter</a>
        </li>
        <li>
          <a href="#plan">Plan d'accès</a>
        </li>
        <li>
          <a href="#quiSommesnous">Qui sommes-nous ?</a>
        </li>
      </ul>
   </nav>
				
</body>





</html>
