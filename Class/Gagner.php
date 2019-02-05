<?php

 class  Gangner
{

    // Les 2 fonctions suivantes permettent de verifier si le dernier coup etait gagnant
    public function nb_align($posx, $posy, $dx, $dy) {
		global $board, $turn;
		if ($posx<0 || $posx>=LARG || $posy<0 || $posy>=HAUT) { 
		    return 0; 
		} else if ($board[$posx][$posy] == $turn)	{
		   return 1 + ($this->nb_align($posx+$dx, $posy+$dy, $dx, $dy)); 
		} else return 0;
    }

    public function total_line($posx, $posy, $dx, $dy) {
		return 1 + $this->nb_align($posx+$dx, $posy+$dy, $dx, $dy) + $this->nb_align($posx-$dx, $posy-$dy, -$dx, -$dy);
    }
    
   
  public  function est_ganger($col) {
	global $board, $turn;
	$posx = $col - 1;
	$i = HAUT - 1;
	while ($i>=0) {
	    if (!($board[$posx][$i] == 0)) {
		break;
	    } else {
		$i--;
	    }
	}
	$posy = $i;
	return(($this->total_line($posx, $posy, 0, 1) >= 4) 
	    || ($this->total_line($posx, $posy, 1, 0) >= 4) 
	    || ($this->total_line($posx, $posy, 1, 1) >= 4) 
	    || ($this->total_line($posx, $posy, -1, 1) >= 4));
    }

}