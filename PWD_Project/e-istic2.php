<?php
$type_article = $_POST['type']; 
if ($type_article == "unite_centrale") { $type = "Unité centrale" ;}
else if ($type_article == "souris") { $type = "Souris";}
else if ($type_article == "ecran") { $type = "Ecran";}
else if ($type_article == "clavier") { $type = "Clavier";} ;
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Matériel</title>
	<link rel="stylesheet" type="text/css" href="css/style_on_off.css" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_identification.css" />
</head>
<body>
<nav  class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div style="opacity:2;" class="container"style="background-color:#0DB0DD">
            <div  style="opacity:2;"style="background-color:#0DB0DD" class="navbar-header">
               <a class="navbar-brand" href="index.php"><p style="font-size:35px;font-style:italic;font-family:Asset;  ">e-istic</p></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="e-istic1.php">Choisir Catégorie</a>
                    </li>
                    <li>
                        <a href="e-istic4.php" >Localisation</b></a>
                
                    </li>
                    <li>
                        <a href="index.php" >Déconnecter </a>
				   </li>
                </ul>
            </div>
    </nav>

<?php

include_once 'includes/recup_donnee.php' ;


echo'<table><tr><td class="title">Reference</td><td class="title">Article</td><td class="title">Caracteristique</td><td class="title">Endroit</td><td class="title">Etat</td><td class="title">Action</td></tr>';

while ($row = mysqli_fetch_array($result))
{
	 if ($row['type'] == $type_article ){
		// echo '<tr><td>'.$row['id'].'</td><td>'.$row['type'].'</td><td>'.$row['caracteristique'].'</td><td>'.$row['endroit'].'</td><td>'.$row['etat'].'</td><td>'.$row['commentaire'].'</td></tr>';
	if ($row['etat'] == '0'){ 
	
	echo '<tr><td>'.$row['id'].'</td><td>'.$type.'</td><td>'.$row['caracteristique'].'</td><td>'.$row['endroit'].'</td><td><div class="switch demo"><input type="checkbox" checked></div></td><td><button type="submit" value="" class="bouton_suppr">Supprimer</button></td></tr>'; 
	} else { 
	echo '<tr><td>'.$row['id'].'</td><td>'.$type.'</td><td>'.$row['caracteristique'].'</td><td>'.$row['endroit'].'</td><td><div class="switch demo"><input type="checkbox"></div></td><td><button type="submit" value="" class="bouton_suppr">Supprimer</button></td></tr>'; 
	}
			 }
	 
}
echo '</table>' ;

?>

<div class="button_holder">

<form action="e-istic3.php" method="post"> 
<button type="submit" value="" class="bouton_ajout">Ajouter</button>
<input type="submit" name="submit" value="Statistiques">
</form>
</div>

<div class="footer">Copyright 2015 © E-ISTIC - All rights reserved !</div>	
</body>
</html>