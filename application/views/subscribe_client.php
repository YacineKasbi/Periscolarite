<link href="<?php echo base_url("assets/css/subscribe.css");?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url("assets/js/subscribe_client.js");?>"></script>
<body>
		<ul class="nav nav-tabs col-lg-12" id="myTab">
		  <li class="active"><a id="defaultOpen" data-toggle="tab" href="#menu01" onclick="openCity(event, 'EtatCivil')">Etat civil</a></li>
		  <li><a data-toggle="tab" href="#menu02" onclick="openCity(event, 'Identifiants')" >Identifiants</a></li>
		  <li><a data-toggle="tab" href="#menu03" onclick="openCity(event, 'Coordonnees')">Coordonnées</a></li>
		  <li><a data-toggle="tab" href="#menu0" onclick="openCity(event, 'InfoComplementaire')">Information complémentaire</a></li>
		</ul>
	
        <form action="<?php echo base_url("structure/valid_client");?>" method="post" class="enregistrement" onsubmit="return verifForm(this)">
			<div class="row">
				<div id="EtatCivil" class="tabcontent col-lg-3">
					<h3>Mon état civil</h3>
					<div class="form-group">
						<label for="nom">Nom: *</label>
						<input type="text" class="form-control champ" id="nom" name="nom" onblur="verif_nom(this)"/>
					</div>
					<div class="form-group">
						<label for="prenom">Prenom: *</label>
						<input type="text" class="form-control champ" id="prenom" name="prenom" onblur="verif_prenom(this)"/>
					</div>
					<div class="form-group">
						<label for="sel1">Sexe: *</label>
						<select class="form-control sel" id="sexe" name="sexe">
							<option>Homme</option>
							<option>Femme</option>
						</select>
					</div>
					<div class="form-group">
						<label for="date_naissance">Date de naissance: *</label>
						<input type="date" class="form-control" id="dateNaissance" name="dateNaissance">
					</div>
					<button type="button" class="btn btn-default">Suivant</button>
				</div>
			</div>
		
		<div class="row">
			<div id="Identifiants" class="tabcontent col-lg-3">
				<h3>Mes identifiants périscolarité</h3>
				<div class="form-group">
					<label for="email">Email: *</label>
					<input type="email" class="form-control" id="email" name="email" onblur="verif_email(this)">
				</div>
				<div class="form-group">
					<label for="pwd">Mot de passe: *</label>
					<input type="password" class="form-control" id="pwd" name="pwd" onblur="verif_pwd(this)">
				</div>
				<div class="form-group">
					<label for="pwd">Confirmer mot de passe: *</label>
					<input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd" onblur="verif_conf_pwd(this)">
				</div>
				<button type="button" class="btn btn-default">Suivant</button>
			</div>
		</div>
		
		<div class="row">
			<div id="Coordonnees" class="tabcontent col-lg-3">
			  <h3>Mes coordonnées</h3>
				<div class="form-group">
					<label for="adresse">Adresse: *</label>
					<input type="text" class="form-control champ" id="adresse" name="adresse" onblur="verif_adresse(this)">
				</div>
				<div class="form-group">
					<label for="ville">Ville: *</label>
					<input type="text" class="form-control champ" id="ville" name="ville" onblur="verif_ville(this)">
				</div>
				<div class="form-group">
					<label for="codepostal">Code postal: *</label>
					<input type="text" class="form-control" id="code_postale" name="code_postale" onblur="verif_code_postale(this)">
				</div>
				<div class="form-group"> 
					<label for="numfixe">Numéro de téléphone fixe: *</label>
					<input type="text" class="form-control" id="numfixe" name="num_fixe" onblur="verif_num_fixe(this)">
				</div>
				<div class="form-group">
					<label for="numportable">Numéro de téléphone portable: *</label>
					<input type="text" class="form-control" id="numportable" name="num_portable" onblur="verif_num_portable(this)">
				</div>
			<button type="button" class="btn btn-default">Suivant</button>	
			</div>
		</div>
		<div class="row">
			<div id="InfoComplementaire" class="tabcontent col-lg-6">
				<h3>Informations complémentaires</h3>
				<div class="form-group">
					<label for="parrain">Email du parrain </label>
					<input type="email" class="form-control" id="mail_parrain" name="mail_parrain">
				</div>
				<div class="form-group">
				<label for="Offre">Je souhaite recevoir mes factures et coupons par mail.:&nbsp </label>
				<label class="radio-inline"><input type="radio" name="offre" value="oui" checked>Oui</label>
				<label class="radio-inline"><input type="radio" name="offre" value="non">Non</label>
				</div>
				<div class="form-group">
					<label for="profession">Profession: *</label>
					<input type="text" class="form-control champ" id="profession" name="profession" onblur="verif_profession(this)">
				</div>
				<div class="form-group">
						<label for="sel1">Comité d'entreprise*</label>
						<select class="form-control sel" id="comite" name="comite" onblur="verif_comite(this)">
							<option VALUE="422">Easy Life</option>
							<option VALUE="450">Pharmacie de la Croix de Lorraine</option>
							<option VALUE="416">NRJ</option>
							<option VALUE="451">Relevant Traffic</option>
							<option VALUE="421">Canal +</option>
							<option VALUE="423">Beaut? Nature</option>
							<option VALUE="424">Evolu Team</option>
							<option VALUE="425">Parelles</option>
							<option VALUE="426">Freshfields Services</option>
							<option VALUE="427">CA (etcalyon)</option>
							<option VALUE="428">Air France</option>
							<option VALUE="429">TF1</option>
							<option VALUE="430">Paris Look</option>
							<option VALUE="431">Natixis</option>
							<option VALUE="432">CSTB</option>
							<option VALUE="433">Jardin d'Ulysse</option>
							<option VALUE="434">Scor</option>
							<option VALUE="435">Agie Charmilles</option>
							<option VALUE="436">GEMO</option>
							<option VALUE="437">Schlindler</option>
							<option VALUE="438">SFR</option>
							<option VALUE="439">KPMG</option>
							<option VALUE="440">Colas</option>
							<option VALUE="441">Jems Partners</option>
							<option VALUE="442">AFD</option>
							<option VALUE="443">Sodexho</option>
							<option VALUE="444">Attica Urbanisme</option>
							<option VALUE="445">ECCE</option>
							<option VALUE="446">SKF</option>
							<option VALUE="447">EDS</option>
							<option VALUE="448">Chanel</option>
							<option VALUE="449">M+X</option>
							<option VALUE="452">France 3</option>
						</select>
					</div>
				<div class="form-group">
					<label for="comment_connu">Comment avez vous connu Périscolarité ? *</label>
					<select class="form-control sel" id="comment_connu" name="comment_connu">
						<option value="ami">Par un ami</option>
						<option value="commercial">Lien commercial</option>
						<option value="moteurRecherche">Moteur de recherche</option>
						<option value="pubMetro">Pub métro</option>
						<option value="etudiantfr">L'étudiant.fr</option>
						<option value="annonceetudiantcom">annonceetudiant.com</option>
						<option value="facebook">Facebook</option>
						<option value="autre">Autre</option>
					</select>
				</div>
				<button class="btn btn-default" style="float:right;" type="submit" data-toggle="modal" data-target="#modal_form_err">Valider</button>
			
				<div class="col-lg-12">
					<p id="infoLegale" style="font-size: 50%;">
						<p><b>
							Informations légales
						</b></p>
						Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, vous bénéficiez d’un droit d’accès et de rectification aux informations qui vous concernent, que vous pouvez exercer en envoyant un email à <strong>service-informatique@gardeperiscolaire.fr</strong> ou en envoyant un courrier postal à Périscolarité, 80 Rue Jules Guesde, 92300 Levallois-Perret
					</p>
					
					<center>
						<p id="foot-form">
							<strong>Les champs avec un * sont obligatoires</strong>
						
						</p>
						<p>Si vous ne pouvez pas valider, vous avez surrement oublié d'entrer une information. Vérifiez que tous les champs avec un * sont remplis.</p>
					</center>
				</div>
				
			</div>
			 <!-- Modal -->
						<div class="modal fade" id="modal_form_err" role="dialog">
							<div class="modal-dialog modal-lg">
							  <!-- Modal content "nous contacter"-->
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h3 class="modal-title">Erreur</h3>
								</div>
								<div class="modal-body">
									<h2>Erreur dans le formulaire !</h2>
									<p>Les champs erronés sont marqués en rouge</p>
									<p>Vérifiez que tous les champs avec une * sont bien remplis</p>
								</div>
							  </div>
							</div>
						</div>
		</div>
        </form>
</body>