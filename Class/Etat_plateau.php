<?php

include('AffichageLigne.php');

 class Affichage_plateau
{

//function qui affiche l'etat complete plateux de jeux 

    function print_board() {
	echo '<form class="intable" action="p4.php" method="post">'."\n";
	echo '<table>'."\n";
	for ($i=(HAUT-1); $i>=0; $i--){
		$users1 = new Afficher; 
         $rows1=$users1->Afficher_Ligne($i);
	} 
     $rows2=$users1->affiche_plateau();
	echo "</table>\n</form>\n";
    }
}



