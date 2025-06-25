<?php

include 'vues/v_declarer_revenu.php';

$action=filter_input(INPUT_GET,'action',FILTER_SANITIZE_SPECIAL_CHARS);

$id= $_SESSION['user']['id'];

$SourceRevenuExist=$bdd->verifRevenuExist($id);
if($SourceRevenuExist){
    include 'vues/v_declarer_revenu.php';

}else{
    //on redirige l'utilisateur vers personnaliser pour declarer au moins une source de revenu
}
?>