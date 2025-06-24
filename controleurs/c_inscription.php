<?php

include 'vues/v_inscription.php';
$action=filter_input(INPUT_GET,'action',FILTER_SANITIZE_SPECIAL_CHARS);

switch($action){
    case 'nouvelUtilisateur':
        $nom=filter_input(INPUT_POST,'lastname',FILTER_SANITIZE_SPECIAL_CHARS);
        $prenom=filter_input(INPUT_POST,'firstname',FILTER_SANITIZE_SPECIAL_CHARS);
        $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
        $mdp=filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
        $confirmmdp=filter_input(INPUT_POST,'confirm_password',FILTER_SANITIZE_SPECIAL_CHARS);
        //var_dump($nom,$prenom,$email,$mdp,$confirmmdp);
        break;
}
        if($mdp==$confirmmdp){
            //enregistre
            $mdpHach=password_hash($mdp,PASSWORD_DEFAULT);
            $bdd->creerNouvelUtilisateur($nom,$prenom,$email,$mdpHach);
        }else{
            $message="le mot de passe de confirmation ne correspond pas au mot de passe";
            
            header('Refresh:3;location:index.php?uc=inscription');
        }
        