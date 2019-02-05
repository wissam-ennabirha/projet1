<?php
include('C:/wamp/www/P4/Models/Requeste.php'); 

  //Include_path "C:/wamp/www/P4/Modeles/Requeste.php";
$users = new Execrequette();      
 
$rows =$users->afficher();

 

?>
<!--   affichage de tableau la  liste des patients -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="C://wamp/www/P4/CSS/Score.css" title="Normal" />

    <title></title>
   
 </head>
 <body>
</head>
<body>
     <center>

  <h1>Liste des Joueur et leur Score </h1>
  </center>
<table border="2px" width="300px" height="80px">
  <centre>

    <tr>        
      <th>Identifiant</th>
      <th>Nom de Joueur</th>
      <th>Score</th> 
    </tr>
 <?php foreach ($rows as $user): ?>
    <tr>
        <td><?php echo $user["id"]; ?></td>
        <td><?php echo $user["Nom"]; ?></td>
        <td><?php echo $user['Score']; ?></td>
    </tr>
    <?php endforeach; ?>
    </centre>

</table>
</body>
</html>

