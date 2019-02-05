
<?php
require_once "AffichageLigne.php";
require_once "Etat_plateau.php";

Class Affichage
{

function Affichage_choix()
   {
  //global $j1, $j2, $turn;
              echo "C'est à ".(($GLOBALS['turn'] == 1)? $GLOBALS['j1'] : $GLOBALS['j2']).' (<img id="img" src="'.(($GLOBALS['turn'] == 1)? "Images/joueur1.png" : "Images/joueur2.png" ).'" alt="pionJoueur" height="15">) de jouer.'."\n";

        return "choiceSelected";    

}

}

