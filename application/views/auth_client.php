<body>
	<div class="container centrage" id="connection">
	  <h2>Connexion</h2>
	  <form class="form-horizontal" method="post" action="<?php echo base_url("structure/login_client");?>">
		<div class="form-group">
		  <label class="control-label col-sm-6" for="email">Email:</label>
		  <div class="col-sm-6">
			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-6" for="pwd">Mot de passe:</label>
		  <div class="col-sm-6">          
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
		  </div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-6 col-sm-6">
			<div class="checkbox">
			  <label><input type="checkbox" name="remember"> Se souvenir de moi</label>
			</div>
		  </div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-6 col-sm-6">
			<button type="submit" class="btn btn-default">Se connecter</button>
		  </div>
		</div>
	  </form>
	</div>
</body>