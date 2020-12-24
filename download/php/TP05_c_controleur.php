<?php
$action = $_REQUEST['action'];
/**
 * @var PdoTd $pdo
 */
switch($action)
{
    case 'accueil':
        {
            include('TP04_v_accueil.php');
            break;
        }
    case 'produits' :
        {

            $lesCategories = $pdo->getLesCategories();

            $lesProduits = $pdo->getLesProduits();
         //   var_dump($lesProduits);
            include('TP05_v_produits.php');
            break;
        }
    case 'contact' :
        {
            include('TP04_v_form.php');
            break;
        }
    case 'acces' :
        {
            include('TP04_v_construction.php');
            break;
        }
    case 'nous' :
        {
            include('TP04_v_construction.php');
            break;
        }
    case 'reponse' :
        {
            include('TP04_v_reponse.php');
            break;
        }
    default :
        {
            include('TP04_v_404.php');
            break;
        }
}