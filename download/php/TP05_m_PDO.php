<?php

class PdoTd
{

    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=baselafleur3';
    private static $user = 'root';
    private static $mdp = 'mysql';
    /**
     * @var PDO $monPdo
     */
    private static $monPdo;
    private static $monPdoTd = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     *
     */
    private function __construct()
    {
        self::$monPdo = new PDO(self::$serveur.';'.self::$bdd, self::$user, self::$mdp);
        self::$monPdo->query("SET CHARACTER SET utf8");

    }
    public function _destruct(){
        self::$monPdo = null;
    }
    /**
     * Fonction statique qui crée l'unique instance de la classe
     *
     * Appel : $instancePdoTd = PdoTd::getPdoTd();
     * @return null l'unique objet de la classe PdoTd
     */
    public  static function getPdoTd()
    {
        if(self::$monPdoTd == null)
        {
            self::$monPdoTd= new PdoTd();
        }
        return self::$monPdoTd;
    }

    /**
     * @return array
     */
    public function getLesCategories()
    {
        $req = "select * from categorie";
        $res = self::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }
    /**
     * @return array
     */
    public function getLesProduits()
    {
        $req="select * from produit";
        $res = self::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }
}