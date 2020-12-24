<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Reponse</title>
    </head>
    <body>
        <h1>Formulaire reponse méthode <?= $_SERVER['REQUEST_METHOD'];?></h1>
      
            <?php
		//	echo("methode");
            var_dump($_REQUEST);
//        print_r($_POST);
//        print_r($_REQUEST);
            ?>
    <p>Bonjour <?= $_REQUEST['mon_champ']['inputPrenom'];?> <?= $_REQUEST['mon_champ']['inputNom'];?></p>
    <p>Un message est envoyé à votre adresse mail <?= $_REQUEST['mon_champ']['inputEmail'];?></p>
    <p>et un courrier à votre adresse :
    <br><?= $_REQUEST['mon_champ']['inputAdresse'];?>
    <br><?= $_REQUEST['mon_champ']['inputCp'];?> <?= $_REQUEST['mon_champ']['inputVille'];?>
    </p>
    <p> <?php echo ($_REQUEST['mon_champ']['gridCheck'])? 'la newsletter sera envoyé tous les mois':'vous n\'êtes pas abonné à la newsletter'; ?></p>
    </body>
</html>
