<?php

class MonTest extends PHPUnit\Framework\TestCase
{

    public function testAffichagePlateau(){
        require_once 'Services/AffichagePlateau.php';
        $afficheplateau = new AffichagePlateau();
        $this->assertTrue($afficheplateau->print_board() );
    }
  
  public function testerinisialization(){
        require_once 'Class/initial.php';
        $init = new Positionner();
        $res="bieninitial";
        $this->assertEquals($res,$init->init());
    }
    public function testermonchoix(){
        require_once 'Class/Choix.php';
        $monchoix = new Affichage();
        $res="bienchoiser";
        $this->assertEquals($res,$monchoix->Affichage_choix());
    }
   

}