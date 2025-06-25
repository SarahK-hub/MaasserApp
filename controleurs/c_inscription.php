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

           if($mdp==$confirmmdp&&!$bdd->verifMailExist($email)){
            //enregistre
            $mdpHach=password_hash($mdp,PASSWORD_DEFAULT);
            $etat= $bdd->creerNouvelUtilisateur($nom,$prenom,$email,$mdpHach);
              if($etat){
                $message="inscription réussie !";
                //include 'vue/v_message.php';
                header('refresh:2;index.php?uc=connexion');
                echo $message;
            }
          }else{
            $message="le mot de passe de confirmation ne correspond pas au mot de passe ou le mail existe déja avec un autre mot de passe";
            echo $message;
            
            header('Refresh:3;index.php?uc=inscription');
        }

    break;
}
     
        