<?php
//Instancier la class aficher la platforme du jeux 
Include ('C:/wamp/www/P4/Class/initial.php');
$users = new Positionner(); 

//instancier la class pour afficher etat de jeux 
Include ('C:/wamp/www/P4/Class/Choix.php');
$users1 = new Affichage(); 

//instancier la class pour Jouer pour jouer
Include ('C:/wamp/www/P4/Class/jouer.php');

//instancier la class pour Gagner
Include ('C:/wamp/www/P4/Class/Gagner.php');
//class base de donnée

Include ('C:/wamp/www/P4/Models/Requeste.php');
 $users5 = new Execrequette(); 

 Include ('AIplaye.php');

  session_start(); 
      
    // On recupere le nom des joueurs si on commence 
    // et on en profite pour envoyer un cookie pour se souvenir des noms
    if (isset($_POST['nomj1'])) {
    $_SESSION['nomj1'] = $_POST['nomj1'];
    $_SESSION['nomj2'] = $_POST['nomj2'];
    setcookie("nomj1", $_POST['nomj1'], time()+12*24*3600); // expire dans 12 jours
    setcookie("nomj2", $_POST['nomj2'], time()+12*24*3600); 
    }

    // Dans le cas ou la session a expire, on reprend aussi les noms dans les cookies
    if (!isset($_SESSION['nomj1'])) {
    $_SESSION['nomj1'] = $_COOKIE['nomj1'];
    $_SESSION['nomj2'] = $_COOKIE['nomj2'];
    }
    
    // on definie des noms de variables plus courts pour simplifier le code
    // mais il ne faut pas oublier de remettre a jour le tableau $_SESSION tout 
    // a la fin car c'est le seul conserve
    $board = $_SESSION['board'];
    $turn = $_SESSION['turn'];
    $j1 = $_SESSION['nomj1'];
    $j2 = $_SESSION['nomj2'];
    
   
   
    // demande a recommencer le jeu, on doit initialiser le plateau de jeu 
    if ((!isset($board)) || $_POST['clear'] == "Recommencer") {
    $rows=$users->init();
    $turn = 1;
    }
    
?>
<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <link rel="stylesheet" type="text/css" href="CSS/p4.css" title="Normal" />
    <title>Puissance 4</title>
    </head>
    <body>
    <div>
    <?php
         $aiMoves = new AIMoves(); 
         $users5 = new Execrequette(); 
        $users2 = new Jouer; 
            $users4 = new Gangner();

    if ($GLOBALS['turn'] === 2){
        $users2->jouer($aiMoves->AIPlay(), 2);
        if ($users4->est_ganger($aiMoves->AIPlay() + 1)) {
            echo "<b id='win'>Computer a gagné !</b><br />";
                $users5->Enregistrerscore($GLOBALS['j1']);
            $_SESSION['finish'] = true;
        } else {
            $turn = 1;
        }
    }
       else  if (isset($_POST['col'])) {
        // Si le coup est valide, il est joue, on verifie s'il est gagnant et on passe au tour suivant
            $users2 = new Jouer; 
            $users4 = new Gangner();
            $users5 = new Execrequette(); 
           

        if ($users2->jouer(($_POST['col'] - 1), $turn)) {

            if ($users4->est_ganger($_POST['col'])) {
              $cmp=0;
             echo "<b>".$GLOBALS['j1']." a gagné !</b><br />";
                $users5->Enregistrerplayer($GLOBALS['j1']);
                $users5->Enregistrerscore($GLOBALS['j1']);
            $_SESSION['finish'] = true;
            } else {
            $turn=($turn%2) + 1;
            }
        }
        }
        $users1->print_board();

        echo "C'est à ".(($turn == 1)? $j1 : $j2).' (<img src="'.(($turn == 1)? "Images/joueur1.png" : "Images/joueur2.png" ).'" alt="pionJoueur" height="15">) de jouer.'."\n"
    ?>

    <form action="p4.php" method="post">
        <input type="submit" name="clear" value="Recommencer" />
    </form>
    
    <form action="index.php" method="post">
        <input type="submit" value="Changer les noms" />
    </div>
</form>
    <form action="Vieus/afficherScore.php" method="post">
        <input type="submit" name="Afficher" value="Afficher" />
    </form>
    </body>
</html>
<?php
    // Et on n'oublie pas de mette $_SESSION a jour
    $_SESSION['board'] = $board;
    $_SESSION['turn'] = $turn;
?>
