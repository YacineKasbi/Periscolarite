<link href="<?php echo base_url("assets/css/subscribe.css");?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url("assets/js/subscribe.js");?>"></script>
<body>
	<ul class="nav nav-tabs" id="myTab">
	  <li class="active"><a id="defaultOpen" data-toggle="tab" href="#menu01" onclick="openCity(event, 'EtatCivil')">Etat civil</a></li>
	  <li><a data-toggle="tab" href="#menu02" onclick="openCity(event, 'Identifiants')" >Identifiants</a></li>
	  <li><a data-toggle="tab" href="#menu03" onclick="openCity(event, 'Coordonnees')">Coordonnées</a></li>
	  <li><a data-toggle="tab" href="#menu04" onclick="openCity(event, 'Identite')">Identité</a></li>
	  <li><a data-toggle="tab" href="#menu05" onclick="openCity(event, 'TravaillerPourAs')">Travailler pour Périscolairé</a></li>
	  <li><a data-toggle="tab" href="#menu0" onclick="openCity(event, 'InfoComplementaire')">Information complémentaire</a></li>
	</ul>	
	
        <form action="Utilisateur/check_enregistrer_inter" method="post" class="enregistrement">
			<div class="row">
				<div id="EtatCivil" class="tabcontent col-lg-3">
					<h3>Mon état civil</h3>
					<div class="form-group">
						<label for="nom">Nom: *</label>
						<input type="text" class="form-control" id="nom">
					</div>
					<div class="form-group">
						<label for="prenom">Prenom: *</label>
						<input type="text" class="form-control" id="prenom">
					</div>
					<div class="form-group">
						<label for="sel1">Sexe: *</label>
						<select class="form-control" id="sexe">
							<option>Homme</option>
							<option>Femme</option>
						</select>
					</div>
					<div class="form-group">
						<label for="date_naissance">Date de naissance: *</label>
						<input type="date" name="anniversaire" class="form-control" id="dateNaissance">
					</div>
					<button type="button" class="btn btn-default">Suivant</button>
				</div>
			</div>
		
		<div class="row">
			<div id="Identifiants" class="tabcontent col-lg-3">
				<h3>Mes identifiants périscolarité</h3>
				<div class="form-group">
					<label for="email">Email: *</label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Mot de passe: *</label>
					<input type="password" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					<label for="pwd">Confirmer mot de passe: *</label>
					<input type="password" class="form-control" id="confirm_pwd">
				</div>
				<button type="button" class="btn btn-default">Suivant</button>
			</div>
		</div>
		
		<div class="row">
			<div id="Coordonnees" class="tabcontent col-lg-3">
			  <h3>Mes coordonnées</h3>
				<div class="form-group">
					<label for="adresse">Adresse: *</label>
					<input type="text" class="form-control" id="adresse">
				</div>
				<div class="form-group">
					<label for="ville">Ville: *</label>
					<input type="text" class="form-control" id="ville">
				</div>
				<div  class="form-group">
					<label for="vehicule">Etes-vous véhiculé ? *</label>
					<select class="form-control" id="vehicule">
						<option value="oui">Oui</option>
						<option value="non">Non</option>
						<option value="permis">J'ai le permis mais pas de véhicule</option>
					</select>
				</div>
				<div class="form-group">
					<label for="codepostal">Code postal: *</label>
					<input type="text" class="form-control" id="code_postale">
				</div>
				<div class="form-group"> 
					<label for="numfixe">Numéro de téléphone fixe: *</label>
					<input type="text" class="form-control" id="numfixe">
				</div>
				<div class="form-group">
					<label for="numportable">Numéro de téléphone portable: *</label>
					<input type="text" class="form-control" id="numportable">
				</div>
			<button type="button" class="btn btn-default">Suivant</button>	
			</div>
		</div>
		
		<div class="row">
			<div id="Identite" class="tabcontent col-lg-3">
				<h3>Mon identité</h3>
				<div class="form-group">
					<label for="nationalite">Nationalité: *</label>
					<input type="text" class="form-control" id="nationalite">
				</div>
				<div class="form-group">
					<label for="pays_naissance">Pays de naissance *</label>
					<input type="text" class="form-control" id="pays_naissance">
				</div>
				<div class="form-group">
					<label for="ville_naissance">Ville de naissance *</label>
					<input type="text" class="form-control" id="ville_naissance">
				</div>
				<div class="form-group">
					<label for="code_postal_naissance">Code postal de la ville de naissance *</label>
					<input type="text" class="form-control" id="CodePostalNaissance">
				</div>
				<div class="form-group">
					<label for="papier_identite">Type de papier d'identité *</label>
					<select class="form-control" id="papier_identite">
						<option value="carteIdentite">Carte nationnale d'identité</option>
						<option value="passeportEurope">Passeport européen</option>
						<option value="titreSejour">Titre de séjour</option>
					</select>
				</div>
				<div class="form-group">
					<label for="date_expiration">Date d'expiartion *</label>
					<input type="date" name="expiration" class="form-control" id="date_expiration">
				</div>
				<div class="form-group">
					<label for="delivre_par">Délivré par *</label>
					<input type="text" class="form-control" id="delivre_par">
				</div>
				<div class="form-group">
					<label for="departement_obtention">Département d'obtention des papiers d'identité *</label>
					<input type="text" class="form-control" id="departement_obtention" required autofocus>
				</div>
				<div class="form-group">
					<label for="numero_secu_sociale">Numéro de sécurité sociale *</label>
					<input type="text" class="form-control" id="numeroSecuSociale">
				</div>
			<button type="button" class="btn btn-default">Suivant</button>	
			</div>
		</div>
        <div id="TravaillerPourAs" class="tabcontent">
            <h3>Travailler pour As du ménage</h3>
            <p>
                <label for="SituationPro">Vous êtes* </label>
                <select name="SituationPro" required autofocus>
                    <option></option>
                    <option value="etudiant">Etudiant(e)</option>
                    <option value="prof">Formateur(trice)/Professeur</option>
                    <option value="sansActivite">Sans activité</option>
                    <option value="salarie">Salarié</option>
                </select>
                <p style="float:right; margin:2%;">Entrez vos disponibilités au format: "Jour de XXhXX à XXhXX"</br>
                Exemple: Mardi de 8h00 à 10h30</br>
                Jeudi de 18h00 à 19h00
                </p>
            </p>
            <p>
                <label for="Disponibilite">Vos disponibilités* </label>
                <textarea id="dispoforminter" name="Disponibilite" value="" required autofocus>Lundi de 
Mardi de 
Mercredi de 
Jeudi de 
Vendredi de 
Samedi de 
Dimanche de </textarea>
            </p>
            <p>
                <label for="Motivation">Vos motivations* </label>
                <textarea id="motivforminter" type="text" name="Motivation" value="" required autofocus></textarea>
            </p>
            <center>
                <p id="foot-form">
                    Les champs avec un * sont obligatoires! 
                </p>
            </center>
        </div>
        <div id="InfoComplementaire" class="tabcontent">
            <h3>Informations complémentaires</h3>
            <p>
                <label for="Parrain">Email du parrain </label>
                <input type="email" name="Parrain" value="">
            </p>
            <p>
                <label for="CommentConnu">Comment avez vous connu As Du Ménage ?* </label>
                <select name="CommentConnu" required autofocus>
                    <option></option>
                    <option value="ami">Par un ami</option>
                    <option value="commercial">Lien commercial</option>
                    <option value="moteurRecherche">Moteur de recherche</option>
                    <option value="pubMetro">Pub métro</option>
                    <option value="etudiantfr">L'étudiant.fr</option>
                    <option value="annonceetudiantcom">annonceetudiant.com</option>
                    <option value="facebook">Facebook</option>
                    <option value="autre">Autre</option>
                </select>
            </p>
            <p>
                <label for="Offre">  Je souhaite recevoir des offres par email</label>
                <input type="radio" name="Offre" value="oui" checked> Oui
                <input type="radio" name="Offre" value="non"> Non 
            </p>
            <p>
                <input type="checkbox" name="ConditionGenerale" value="" required autofocus> J'accepte les<a href="#" data-toggle="modal" data-target="#modalCondition"> conditions générales</a>*
            </p>
            <p>
                <input type="checkbox" name="ConditionPaiement" value="" required autofocus> J'accepte de me conformer aux 
                    <!-- Trigger the modal with a link -->
                      <a href="#" data-toggle="modal" data-target="#modalConditionPaiement">conditions de paiement As Du Ménage</a>*

                      <!-- Modal -->
                      <div class="modal fade" id="modalConditionPaiement" role="dialog">
                        <div class="modal-dialog modal-lg">
                        
                          <!-- Modal content "nous contacter"-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h3 class="modal-title">Conditions de paiement As du Ménage</h3>
                            </div>
                            <div class="modal-body">
                                <h4>Pour recevoir mon paiement:</h4>
                                <p>J'ai bien noté mon Email et mon mot de passe.</p>
                                <p>J'accepte d'enregister mes coupons AVANT le 24 de chaque mois minuit.</p>
                                <p>J'ai renseigné une adresse postale valide pour recevoir ma paie.</p>
                            </div>
                          </div>

                        </div>
                      </div>
            </p>
            <p id="infoLegale" style="font-size: 50%;">
                <p><b>
                    Informations légales
                </b></p>
                Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, vous bénéficiez d’un droit d’accès et de rectification aux informations qui vous concernent, que vous pouvez exercer en envoyant un email à info@asdumenage.fr ou en envoyant un courrier postal à As Du Ménage, 80 Rue Jules Guesde, 92300 Levallois-Perret
            </p>
            <center>
                <p id="foot-form">
                    Les champs avec un * sont obligatoires! 
                <button style="float:right;" type="submit">Valider</button>
                </p>
                <p>Si vous ne pouvez pas valider, vous avez surrement oublié d'entrer une information. Vérifiez que tous les champs avec un * sont remplis.</p>
            </center>
        </div>
        </form>
    </div>
</div>
</div>
</head>
</body>
</html>



    <script type="text/javascript">
	document.getElementById("defaultOpen").click();  
    function openCity(evt, cityName) {
		
        // Declare all variables
        var i, tabcontent;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    } 
	
    </script>