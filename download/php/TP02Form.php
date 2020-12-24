<?php 	include 'TP02Entete.php';
include 'TP03Menu.php';	?>
<div class="container">
    <form action="TP02Reponse.php" method="get">
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
        <button type="submit" class="btn btn-primary"><?php echo $form01;?></button>
    </form>
</div>
<?php 	include 'TP02Pied.php';?>
