<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <?php

        for ($i = 0; $i < count($lang); $i++):
            $flag=true;
            if ($lang[$i] == 'langage' ){$flag=false;}
            if ($lang[$i] == 'language'){$flag=false;}
            if ($flag):   ?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo ucfirst($lang[$i]); ?></a>
                </li>
            <?php else : ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <?php echo ucfirst($lang[$i]); ?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="?lang=fr">Francais</a>
                        <a class="dropdown-item" href="?lang=eng">Anglais</a>
                    </div>
                </li>
            <?php endif;   //fin du if ?>
        <?php endfor    //fin de la boucle ?>

    </ul>
</nav>

