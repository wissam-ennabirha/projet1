<?php
    include_once("BD.php");
class Execrequette
{	
	private $connexion;
	public function __construct()
	{
		$this->connexion = new gestion_BD();
	}


public function Enregistrerplayer($Nom)
	{

		
    	   $requete = $this->connexion->getConnexion()->prepare("INSERT INTO Player(Nom) VALUES (:name)");
            $requete->bindParam(':name',$Nom);
            $requete->execute();


	}

public function Enregistrerscore($Nom)
	{
    	  

        $stmt=$this->connexion->getConnexion()->prepare("UPDATE Player SET Score=Score+1 WHERE Nom like :nom");
        $stmt->execute(['nom' => $Nom]);
    }
                

	


  public function getJoueur($nom)
    {
        $stmt = $this->connexion->getConnexion()->prepare("Select * from Player where Nom like :nom");
        $stmt->execute(['nom' => $nom]);
        return $stmt->fetch();
    }


 //pour afficher les elemente de joueur 
      public function afficher()
    {
        return $this->connexion->getConnexion()->query("SELECT * FROM Player");
    }

}

?>