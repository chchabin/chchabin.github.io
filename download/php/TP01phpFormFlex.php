<?php
//Déclaration de variables
$tva=0.20;
$prix=4.5;
$nombre=5000;

?>
<!DOCTYPE html>
<html>
<head>
	<title>TP01 Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<style type="text/css"> 
    
    /* Placez ici les directives CSS */ 
/************* Gestion de la présentation (layout) *************/
.flex-form li{
	display: flex;
	flex-wrap: wrap; /* */	
	justify-content: flex-start;/*  */
	align-items: center;/*  */
}
	/* la taille du label va de 120 à 220px */
.flex-form > li > label {
	flex-grow: 1;/*  */
	flex-shrink: 0;/*  */
	flex-basis:120px;/*  */	 
	max-width: 220px;/*  */	
}
/* la taille de la saisie est de 220px la taille totale de la ligne est de 340px*/
.flex-form > li > label + *{
	flex-grow: 1;/*  */
	flex-shrink: 0;/* */
	flex-basis:220px;/*  */	
}
	/************* Gestion des styles *************/
body {
  background: #f2f2f2;
}	
.flex-form li {
  padding: 8px;
  font-weight: 300;
  letter-spacing: .09em;
  text-transform: uppercase;
}
.flex-form li input{
  pointer-events: none;
  cursor: not-allowed;
}


  </style>
</head>

<body>
<div class="container">
 
  <form>
    <ul class="flex-form">
      <li>
        <label for="nommbre">Nombre</label>
        <input type="text" id="nommbre" placeholder="<?php echo $nombre;?>">
      </li>
      <li>
        <label for="prix">Prix</label>
        <input type="text" id="prix" placeholder="<?php echo $prix;?>">
      </li>
       <li>
        <label for="tva">TVA</label>
        <input type="text" id="tva" placeholder="<?php echo $tva;?>">
      </li>
	   <li>
        <label for="mht">Montant Hors taxe</label>
        <input type="text" id="mht" placeholder="<?php echo ($nombre*$prix);?>">
      </li>
	   <li>
        <label for="mttc">Montant TTC</label>
        <input type="text" id="mht" placeholder="<?php echo ($nombre*$prix*$tva);?>">
      </li>
    </ul>
  </form>
</div>
				
</body>





</html>
