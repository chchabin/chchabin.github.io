<?php
session_start();
require_once 'TP05_m_PDO.php';
require_once 'TP06_m_model.php';
/*
 * Gestion des routes
 * index.php?uc=controleur&action=xxxx
 */
if(!isset($_REQUEST['uc']))
    //l'url n'a pas d'information
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];

$pdo = PdoTd::getPdoTd();

/*
* Affichage de la vue
*/
ob_start();
//chargement du controleur
//mise en cache de la vue fournie par le controleur
switch($uc)
{
    case 'accueil':
        {  include('TP04_v_accueil.php');break;}

    default :
        {  include('TP06_c_controleur.php');break;}
}
//liberation du cache dans une variable
$contenu = ob_get_clean();
$lang =!isset($_SESSION['lang'])?$menu01:$_SESSION['lang'];
//chargement de la vue par defaut
require 'TP06_v_gabarit.php';
