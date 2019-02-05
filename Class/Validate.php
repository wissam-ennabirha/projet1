<?php

 class Validate
{

 function validate($col)
 {
     global $board;
	$i = 0;
	$done = false;
	while ($i<HAUT) {
	    if ($board[$col][$i] == 0) {
		$done=true;
		break;
	    } else {
		$i++;
	    }
	}
	return $done;
   }

}