<?php
 class Positionner 
{

 function init() {
	global $board;
	for ($i=0; $i<LARG; $i++) {
	    for ($j=0; $j<HAUT; $j++) {
		$board[$i][$j]=0;
	    }
	}
    }
 }

 ?>