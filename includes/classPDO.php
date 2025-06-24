<?php
class PdoMaasserApp
{
    //initialise les attributrs en privés
    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=maasserapp';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $monPdoMaasserApp = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct()
    {
        PdoMaasserApp::$monPdo = new PDO(
            PdoMaasserApp::$serveur . ';' . PdoMaasserApp::$bdd,
            PdoMaasserApp::$user,
            PdoMaasserApp::$mdp
        );
        PdoMaasserApp::$monPdo->query('SET CHARACTER SET utf8');
    }

    /**
     * Méthode destructeur appelée dès qu'il n'y a plus de référence sur un
     * objet donné, ou dans n'importe quel ordre pendant la séquence d'arrêt.
     */
    public function __destruct()
    {
        PdoMaasserApp::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : $instancePdoMaasserApp = PdoMaasserApp::getPdoMaasserApp();
     *
     * @return l'unique objet de la classe PdoMaasserApp
     */
    public static function getPdoMaasserApp()
    {
        if (PdoMaasserApp::$monPdoMaasserApp == null) {
            PdoMaasserApp::$monPdoMaasserApp = new PdoMaasserApp();
        }
        return PdoMaasserApp::$monPdoMaasserApp;
    }

    public function creerNouvelUtilisateur($nom,$prenom,$email,$mdpHach){
         $requetePrepare = PdoMaasserApp::$monPdo->prepare(
        'INSERT INTO utilisateurs(nom,prenom,email,mdp)'
        . 'VALUES (:unNom, :unPrenom, :unEmail, :unMdp)'
    );
    $requetePrepare->bindParam(':unNom',$nom,PDO::PARAM_STR);
    $requetePrepare->bindParam(':unPrenom',$prenom,PDO::PARAM_STR);
    $requetePrepare->bindParam(':unEmail',$email,PDO::PARAM_STR);
    $requetePrepare->bindParam(':unMdp',$mdpHach,PDO::PARAM_STR);
    $requetePrepare->execute();
    return $requetePrepare->rowCount()>0;
   
}



}

?>