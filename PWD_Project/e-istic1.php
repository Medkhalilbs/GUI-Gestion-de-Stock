<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>catégorie</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style_identification.css" />
   <link rel="stylesheet" type="text/css" href="css/footer.css" />
</head>


<body>
<nav  class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div style="opacity:1;" class="container"style="background-color:#0DB0DD">
            <div  style="opacity:1;"style="background-color:#0DB0DD" class="navbar-header">
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

 <form class="formulaire" action="e-istic2.php" method="post">
    	
    <font color="#F0FFFF">Choisir une Catégorie</font>

    <select name="type">
        <option value="ecran">Ecran </OPTION> 
		<option value="clavier">Clavier</OPTION>
		<option value="unite_centrale">Unité Centrale</OPTION>
		<option value="souris">Souris </OPTION>
    </select>
	<p>
		<input align="center" type="submit" name="submit" value="Suivant">
	</p>  
</form>	
 </div>

<div class="footer">Copyright 2015 © E-ISTIC - All rights reserved !</div>	
</body>
</body>
</html>
