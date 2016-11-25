<!DOCTYPE html>
<html>
  <head>
   <title>Authentification | PWD Project</title>
   <meta charset="utf-8" />
   <link rel="stylesheet" type="text/css" href="css/style_identification.css" />
   
  </head>

<body>
 <form class="formulaire" action="e-istic1.php" method="post">
	<p class="clearfix">
		<label for="login">Utilisateur   :</label>
		<input type="text" name="login" id="login" placeholder="Nom d'utilisateur">
	</p>
	<p class="clearfix">
		<label for="password">Mot de passe :</label>
		<input type="password" name="password" id="password" placeholder="Mot de passe"> 
	</p>
	<p class="clearfix">
		<input type="checkbox" name="remember" id="remember">
		<label for="remember">Se rappeler de moi</label>
	</p>
	<p class="clearfix">
		<input type="submit" name="submit" value="ME CONNECTER">
	</p>       
 </form>
  </div>



</body>
</html>