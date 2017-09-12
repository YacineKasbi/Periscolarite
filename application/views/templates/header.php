<!DOCTYPE html">
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
	    <meta name="description" content="<?php echo $description; ?>" />
	    <meta name="keywords" content="<?php echo $keywords; ?>" />
	    
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title><?php echo $title; ?></title>
		<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js");?>"></script>
		<link href="<?php echo base_url("assets/css/menu.css");?>" rel="stylesheet">
		<link href="<?php echo base_url("assets/css/theme.css");?>" rel="stylesheet">
		<link href="<?php echo base_url("assets/css/subscribe.css");?>" rel="stylesheet">
		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">
		<!-- Bootstrap theme -->
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<!--<link href="<?php echo base_url("assets/css/ie10-viewport-bug-workaround.css");?>" rel="stylesheet">-->
		<!-- Custom styles for this template -->
		<link href="<?php echo base_url("assets/css/add.css");?>" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<!-- Fixed navbar -->
	<header>
			<nav class="navbar navbar-default" id="barre_nav">
				<div class="container-fluid" id="barre_nav">
				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<a class="navbar-brand" href="<?php echo base_url();?>"> Périscolarité</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						  <ul class="nav navbar-nav navbar-right">
							<li><a href="subscribe"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
							<li><a href="auth"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
						  </ul>
					</div>
				 </div>
			</div>
		</nav>
	</header>
	<!-- end header -->