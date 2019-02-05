<?php
    define('HAUT',6);
    define('LARG',7);
 class Afficher 
{

// fonction pour afficher les etat de ligne
   function afficher_Ligne($line) {
	global $board;
	echo "<tr>\n";
	for ($i=0; $i<LARG; $i++) {
	    $c = $board[$i][$line];
	    echo '<td><img src="';
	    echo (($c == 0) ? "Images/vide.png" : (($c == 1) ? "Images/joueur1.png" : "Images/joueur2.png"));
	    echo '" alt="';
	    echo (($c == 0) ? "0" : (($c == 1) ? "j1" : "j2"));
	    echo '" /></td>'; 
	}
	echo "\n</tr>\n";
    }


  function affiche_plateau() {
	echo '<tr class="lastline">'."\n";
	for ($i=0; $i<LARG; $i++) {
	    echo '<td><input type="submit" name="col" value="'.($i + 1).'" /></td>';
	}
	echo "\n</tr>\n";
    }
   
}

 ?>