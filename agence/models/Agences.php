<?php
class Agences{
    // Connexion
    private $connexion;
    private $table = "agences";

    // object properties
    public $id;
    public $nom;
    public $lat;
    public $lon;

    /**
     * Constructeur avec $db pour la connexion à la base de données
     *
     * @param $db
     */
    public function __construct($db){
        $this->connexion = $db;
    }

    /**
     * Lecture des agences
     *
     * @return void
     */
    public function lire(){
        // On écrit la requête
        $sql = "SELECT * FROM " . $this->table;

        // On prépare la requête
        $query = $this->connexion->prepare($sql);

        // On exécute la requête
        $query->execute();

        // On retourne le résultat
        return $query;
    }


}