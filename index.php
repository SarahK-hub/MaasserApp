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
}
?>