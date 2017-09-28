<!DOCTYPE html">

<?php
	if(isset($_SESSION["connected"]) && $_SESSION["connected"])
		$connecter = '&nbsp&nbsp'.$_SESSION["prenom"];
?>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
	    
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title><?php echo $title; ?></title>
		<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js");?>"></script>
		<link href="<?php echo base_url("assets/css/menu.css");?>" rel="stylesheet">
		<link href="<?php echo base_url("assets/css/theme.css");?>" rel="stylesheet">
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
							<?php
								if(isset($_SESSION["connected"]) && $_SESSION["connected"]) {
									echo '<li><a href="'.base_url('structure/deco')."\"><span class='glyphicon glyphicon-user'></span> Déconnexion</a></li>";
									echo '<li class="dropdown">';
									echo '<a class = "dropdown-toggle" data-toggle ="dropdown"></span><span class="pull-left hidden-xs showopacity glyphicon glyphicon-log-in"></span>'.$connecter.'<span class="caret" id="caret_head"></a>';
									echo '<ul class="dropdown-menu forAnimate"  id="drop_nav">';
									echo '<li><a href="#">Mon profil</a></li>';
									echo '<li><a href="#">Test1</a></li>';
									echo '<li><a href="#">Test2</a></li>';
									echo '<li><a href="#">Test3</a></li>';
									echo '</ul>';
									echo '</li>';
								}
								else {						
									echo '<li class="dropdown">';
									echo '<a class = "dropdown-toggle" data-toggle ="dropdown"></span><span class="pull-left hidden-xs showopacity glyphicon glyphicon-user"></span>&nbsp&nbspSe connecter<span class="caret" id="caret_head"></a>';
									echo '<ul class="dropdown-menu forAnimate">';
									echo '<li><a href="'.base_url('structure/auth_client')."\">En tant que client</a></li>";
									echo '<li><a href="'.base_url('structure/auth_intervenant')."\">En tant qu'intervenant</a></li>";
									echo '</ul>';
									echo '</li>';
									
									
									echo '<li class="dropdown">';
									echo '<a class = "dropdown-toggle" data-toggle ="dropdown"></span><span class="pull-left hidden-xs showopacity glyphicon glyphicon-log-in"></span>&nbsp&nbspS\'inscrire<span class="caret" id="caret_head"></a>';
									echo '<ul class="dropdown-menu forAnimate"  id="drop_nav_sub">';
									echo '<li><a href="'.base_url('structure/subscribe_client')."\">En tant que client</a></li>";
									echo '<li><a href="'.base_url('structure/subscribe_interv')."\">En tant qu'intervenant</a></li>";
									echo '</ul>';
									echo '</li>';
								}
							?>
						</ul>
					</div>
				 </div>
			</div>
		</nav>
	</header>
	<!-- end header -->