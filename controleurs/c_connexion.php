<?php

include 'vues/v_connexion.php';
$action=filter_input(INPUT_GET,'action',FILTER_SANITIZE_SPECIAL_CHARS);

switch($action){

    case 'verifConnexion':
        $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
        $mdp=filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
       
        //var_dump($email,$mdp);
        $result=$bdd->verifConnexion($email);

        if($result){

         //var_dump($result);
         $mdpHach=$result['mdp'];
          if(password_verify($mdp,$mdpHach)){
            

            $_SESSION['user']=[
                'id'=>$result['id'],
                'nom'=>$result['nom'],
                'prenom'=>$result['prenom'],
                'email'=>$result['email'],
                'taux_don'=>$result['taux_don'],
            ];
            $message="Connexion réussie!";
           echo $message;
            header('Refresh:2;index.php?uc=menuPrincipal');

           }else{

           $message="Mot de passe incorrect.Veuillez réessayer";
           echo $message;
           //include'vues/v_message.php';
           header('Refresh:2;index.php?uc=connexion');
          }
        }else{
           $message="Aucun Utilisateur trouvé avec cet email";
           echo $message; 
        }
        
    break;
}


?>