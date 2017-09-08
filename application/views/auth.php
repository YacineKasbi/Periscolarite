<!DOCTYPE html>

<html>

    <head>
    <!-- Je sais pas si c'est nécessaire , mais tans pis  -->
        <meta charset="utf-8" />

        <title>Page d'authentification en travaux </title>

        
	<link href="<?php echo base_url("/assets/css/volet.css");?>" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("/assets/css/bootstrap.min.css");?>" rel="stylesheet">
    <!-- Bootstrap theme -->
    <!--<link href="<?php echo base_url("assets/css/bootstrap-theme.min.css");?>" rel="stylesheet">-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="<?php echo base_url("assets/css/ie10-viewport-bug-workaround.css");?>" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <!--<link href="<?php echo base_url("assets/css/theme.css");?>" rel="stylesheet">-->
	<link href="<?php echo base_url("assets/css/add.css");?>" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url("assets/js/ie-emulation-modes-warning.js");?>"></script>

    </head>


    <body>
    <center>
    <br/>
    	<h1>Cette page répresente la futur page de login. </h1>
    	<h3>Travaux toujours en cours cependant. </h3>


    	<div id="main">
   	<form action="<?php echo base_url();?>" method="POST">
	<table id="login">
		<tr>
			<td align="center" colspan=2>Connectez-vous</td>
		</tr>
		<tr>
			<td>Identifiant:<br/><span class="small">(Email ou Téléphone)</span></td>
			<td><input type=text name="email" value="" /></td>
		</tr>
		<tr>
			<td>Mot de passe:</td>
			<td><input type=password name="password"/></td>
		</tr>
		<tr>
			<td>Se souvenir de moi:</td>
			<td><input type=checkbox name="save"/></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" name="login" value="Connexion" /></td>
		</tr>
	</table>
	</form>
	<center><span class="error"><br/><a href='index.php?page=my_account&subview=password&email='>Mot de passe perdu?</a></span></center>
	</div>
	</center>
</body>
</html>