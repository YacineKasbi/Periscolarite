<body>
<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Accueil<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trouver une baby-sitter <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="{{URL::to('createusuario')}}">Espace intervenant</a></li>
			<li class="divider"></li>
            <li><a href="#">1</a></li>
			<li class="divider"></li>
            <li><a href="#">2</a></li>
            <li class="divider"></li>
            <li><a href="#">3</a></li>
            <li class="divider"></li>
            <li><a href="#">4</a></li>
          </ul>
        </li>
		<li ><a href="#">Espace Intervenant<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>		
        <li ><a href="#">Espace client<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li ><a href="#">Tarifs et devis<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
		<li ><a href="#">Nous contacter<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
      </ul>
    </div>
	</div>
</nav>

	<div class="container-fluid">
	<div class="row">
	  <div id="myCarousel" class="carousel slide col-sm-10" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		  <div class="item active">
			<img src="<?php echo base_url("assets/images/1.jpg");?>" alt="test" style="width:100%;">
		  </div>

		  <div class="item">
			<img src="<?php echo base_url("assets/images/2.gif");?>" alt="test" style="width:100%;">
		  </div>
		
		  <div class="item">
			<img src="<?php echo base_url("assets/images/3.jpg");?>"  alt="test"  style="width:100%;">
		  </div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	</div>
	</div>
</body>





