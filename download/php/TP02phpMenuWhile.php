<?php
//Déclaration de variables
$id=array("accueil","services","contacts","plan","quisommesnous");
$francais=array("accueil","nos services","nous contacter","plan d'accés","qui sommes nous ?","connexion");
var_dump ($francais);

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
.container{  border:solid 2px red;  display:flex;flex-direction:column;}
.item{  font-size:2em;  margin:5px;  padding:5px;  border:solid 2px black;  text-align:center; height:200px;}				  
.header{  background-color: #9900FF;}
.menuLeft{  background-color: #00FFFF;}
.content{ background-color:#DDDDDD;}
.footer{ background-color:#FF00FF;}


  </style>
</head>

<body>
<nav>
      <ul class="nav">
	  <?php 
		$i= 0;
		While ( $i < sizeof($francais)) { 
	  ?>
            <li>
				<a href="#<?php if($francais[$i]=="connexion") { echo 'accueil'; }else{ echo $id[$i]; }?>"><?php echo $francais[$i];?></a>
			</li>  
       <?php $i++;    }//fin de la boucle ?>
	 
      </ul>
   </nav>
	   <div class="container">  
		<section id="presentation">
			<header class="header item">Accueil</header>		
		</section>
		<section id="quiSommesNous">
			<nav class="menuLeft item">Qui sommes-nous ?</nav>  
		</section>   
		<section id="services">
			<section class="content item">Nos services</section>   
		</section>
		<section id="plan">
			<footer class="footer item">plan</footer>	
		</section>
		 <section id="contacts">
			<header class="header item">contacts</header> 	
		</section>
	</div>				
</body>





</html>
