<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <?php
        foreach ($lang as $cle => $valeur): ?>
            <li  class="nav-item">
                <a class="nav-link" href="<?=$valeur;?>"><?php echo ucfirst($cle);?></a>
            </li>
        <?php endforeach;//fin de la boucle ?>
    </ul>
</nav>

