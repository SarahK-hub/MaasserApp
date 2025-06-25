<?php
//echo 'salut';
//$uc = $_GET['uc'];
require_once 'includes/classPDO.php';
require_once 'includes/ftc.php';

$bdd=PdoMaasserApp::getPdoMaasserApp() ;

$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_SPECIAL_CHARS);
if(empty($uc)){
    $uc = "acceuil";
}
session_start();

switch ($uc) {
    case 'connexion':
        include 'controleurs/c_connexion.php';
        break;
    case 'acceuil':
        include 'controleurs/c_accueil.php';
        break;
    case 'inscription':
        include 'controleurs/c_inscription.php';
        break;
    case 'menuPrincipal':
          include 'vues/v_menu_principal.php';
        break;
    case 'declarer_revenu':
          include 'controleurs/c_declarer_revenu.php';
        break;
    case 'declarer_don':
          include 'controleurs/c_declarer_don.php';
        break;
    case 'Personnaliser':
          include 'controleurs/c_personnaliser.php';
        break;
    case 'recap':
          include 'controleurs/c_recap.php';
        break;
   
}
?>