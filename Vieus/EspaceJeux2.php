

<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="CSS.css" title="Normal" />
	<style >
		body 
{
  padding-top:25px;
  background-color:;
  margin-left:10px;
  margin-right:10px;
  text-align: center;
}

 input, textarea ,select{
  font-size: 1em;
  padding: 15px 10px 10px;
  font-family: 'Source Sans Pro',arial,sans-serif;
  border: 1px solid #cecece;
  background: #d7d7d7;
  color:#FAFAFA;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 80%;
  max-width: 600px;
}

button {
  margin-top:15px;
  margin-bottom:25px;
  background-color:#2ABCA7;
  padding: 12px 45px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #2ABCA7;
  -webkit-transition: .5s;
  transition: .5s;
  display: inline-block;
  cursor: pointer;
  width:30%;
  color:#fff;
}

button:hover, .button:hover {
  background:#19a08c;
}


button:hover, .button:hover {
  background:#19a08c;
}


	</style>
	<title>Puissance 4</title>

	
    </head>
    <body>
	<div>
	<form action="..//p4/p4.php" method="post">
	    Nom du joueur 1 :
	    <input type="text" name="nomj1" value=<?php
		if (isset($_COOKIE['nomj1'])) {
		    echo '"'.$_COOKIE['nomj1'].'"';
		} else { echo '""'; }
	    ?> /><br />
	    <br><br>
	    Nom du joueur 2 :
	    <input type="text" name="nomj2" value=<?php
		if (isset($_COOKIE['nomj2'])) {
		    echo '"'.$_COOKIE['nomj2'].'"';
		} else { echo '""'; }
	    ?>/><br />
	    <br><br>
	    <button type="submit" name="nomJoueur" value="Commencer" > Comencer </button>
	</form>
	</div>
    </body>
</html>


