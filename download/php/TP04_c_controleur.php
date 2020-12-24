<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'accueil':
        {
            include('TP04_v_accueil.php');
            break;
        }
    case 'produits' :
        {
            include('TP04_v_construction.php');
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