
<div class="container">
    <?php foreach( $lesCategories as $uneCategorie) : ?>
    <h2><?= $uneCategorie['libelle']; ?></h2>
    <hr>
    <div class="row">
    <?php foreach( $lesProduits as $unProduit) :
            if ($uneCategorie['id']==$unProduit['idCategorie']):?>
    <div class="card col-3">
        <img class="card-img-top" src="<?= $unProduit['image']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $unProduit['description']; ?></h5>
        </div>
        <div class="card-footer">
            <p class="card-text">prix : <?= $unProduit['prix']; ?> €</p>
        </div>
    </div>
            <?php endif; ?>
    <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
</div>