<?php

    define("SERVEUR","localhost");
    define("NOM","root");
    define("PASS","");
    define("DATABASE","projetphp");
class gestion_BD
{   
    private $bd;
        public function __construct(){
            try
            {
             $this->bd = new PDO("mysql:host=".SERVEUR.";dbname=".DATABASE.";charset=utf8", NOM, PASS);
            }catch(PDOException $e){
                exit("Problème de connexion à la base donnée");
            }
        }
        public function getConnexion(){
            return $this->bd;
        }
}
?>