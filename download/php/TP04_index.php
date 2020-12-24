<?php
include('TP04_m_model.php');
include('TP04_v_entete.php');
$lang = $menu01;
include('TP04_v_menu.php');
if(!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];
switch($uc)
{
    case 'accueil':
        {
            include('TP04_v_accueil.php');break;}

    default :
        {
            include('TP04_c_controleur.php');break;}
}
include('TP02Pied.php') ;
