<body>
    <div class="tab">
      <button class="btn btn-primary" role="button" onclick="openCity(event, 'EtatCivil')" id="defaultOpen">Etat civil</button>
      <button class="btn btn-primary" role="button" onclick="openCity(event, 'Identifiants')">Identifiants As du ménage</button>
      <button class="btn btn-primary" role="button" onclick="openCity(event, 'Coordonnees')">Coordonnées</button>
      <button class="btn btn-primary" role="button" onclick="openCity(event, 'Identite')">Identité</button>
      <button class="btn btn-primary" role="button" onclick="openCity(event, 'TravaillerPourAs')">Travailler pour As du ménage</button>
      <button class="btn btn-primary" role="button"onclick="openCity(event, 'InfoComplementaire')">Information complémentaire</button>
    </div>
    <div>
        <form action="Utilisateur/check_enregistrer_inter" method="post" class="enregistrement">

        <div id="EtatCivil" class="tabcontent">
          <h3>Mon état civil</h3>
            <p>
                <label for="Nom">Nom* </label>
                <input type="text" name="Nom" value="" required autofocus>
            </p>
            <p>
                <label for="Prenom">Prenom* </label>
                <input type="text" name="Prenom" value="" required autofocus>
            </p>
            <p>
                <label for="Sexe">Sexe* </label>
                <select name="Sexe" required autofocus>
                    <option></option>
                    <option value="F">Femme</option>
                    <option value="F">Homme</option>
                </select>
            </p>
            <p>
                <label for="DateNaissance">Date de naissance* </label>
 
                <select name="JourNaissance" required autofocus>
                    <option></option>
                        <?php for ($jour = 1 ; $jour <= 31 ; $jour++)
                {
                ?>
                                  <option value="<?php echo $jour ?>"><?php echo $jour; ?></option>
                <?php              
                }
                ?>  
                </select>
                <select name="MoisNaissance" required autofocus>
                    <option></option>
                        <?php for ($mois = 1 ; $mois <= 12 ; $mois++)
                {
                ?>
                                  <option value="<?php echo $mois ?>"><?php echo $mois; ?></option>
                <?php              
                }
                ?>  
                </select>
                <select name="AnneeNaissance" required autofocus>
                    <option></option>
                        <?php for ($annee = 2005 ; 1900 <= $annee ; $annee--)
                {
                ?>
                                  <option value="<?php echo $annee ?>"><?php echo $annee; ?></option>
                <?php              
                }
                ?>  
                </select>
            </p>
                <center>
                    <p id="foot-form">Les champs avec un * sont obligatoires!</p>
                </center>
        </div>

        <div id="Identifiants" class="tabcontent">
          <h3>Mes identifiants As Du Ménage</h3>
            <p>
                <label for="Email">Email* </label>
                <input type="mail" name="Email" value="" required autofocus>
            </p>
            <p>
                <label for="Password">Mot de passe* </label>
                <input type="password" name="Password" value="" required autofocus>
            </p>
            <p>
                <label for="ConfirmPassword">Confirmer le mot de passe* </label>
                <input type="password" name="ConfirmPassword" value="" required autofocus>
            </p>
            <center>
                <p id="foot-form">Les champs avec un * sont obligatoires!</p>
            </center>
        </div>

        <div id="Coordonnees" class="tabcontent">
          <h3>Mes coordonnées</h3>
            <p>
                <label for="Adresse">Adresse* </label>
                <input type="text" name="Adresse" value="" required autofocus>
            </p>
            <p>
                <label for="Ville">Ville* </label>
                <input type="text" name="Ville" value="" required autofocus>
            </p>
            <p>
                <label for="Vehicule">Etes-vous véhiculé?* </label>
                <select name="Vehicule" required autofocus>
                    <option></option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                    <option value="permis">J'ai le permis mais pas de véhicule</option>
                </select>
            </p>
            <p>
                <label for="CodePostal">Code postal* </label>
                <input type="text" name="CodePostal" value="" required autofocus>
            </p>
            <p> 
                <label for="NumFixe">Numéro de téléphone fixe </label>
                <input type="text" name="NumFixe" value="">
            </p>
            <p>
                <label for="NumPortable">Numéro de téléphone portable* </label>
                <input type="text" name="NumPortable" value="" required autofocus>
            </p>
            <center>
                <p id="foot-form">
                    Les champs avec un * sont obligatoires! 
                </p>
            </center>
        </div>

        <div id="Identite" class="tabcontent">
            <h3>Mon identité</h3>
            <p>
                <label for="Nationalite">Nationalité* </label>
                <input type="text" name="Nationalite" value="" required autofocus>
            </p>
            <p>
                <label for="PaysNaissance">Pays de naissance* </label>
                <input type="text" name="PaysNaissance" value="" required autofocus>
            </p>
            <p>
                <label for="VilleNaissance">Ville de naissance* </label>
                <input type="text" name="VilleNaissance" value="" required autofocus>
            </p>
            <p>
                <label for="CodePostalNaissance">Code postal de la ville de naissance* </label>
                <input type="text" name="CodePostalNaissance" value="" required autofocus>
            </p>
            <p>
                <label for="PapierIdentite">Type de papier d'identité* </label>
                <select name="PapierIdentite" required autofocus>
                    <option></option>
                    <option value="carteIdentite">Carte nationnale d'identité</option>
                    <option value="passeportEurope">Passeport européen</option>
                    <option value="titreSejour">Titre de séjour</option>
                </select>
            </p>
            <p>
                <label for="DateExpiration">Date d'expiration* </label>

                <select name="JourExpiration" required autofocus>
                    <option></option>
                        <?php for ($jour = 1 ; $jour <= 31 ; $jour++)
                {
                ?>
                                  <option value="<?php echo $jour ?>"><?php echo $jour; ?></option>
                <?php              
                }
                ?>  
                </select>
                <select name="MoisExpiration" required autofocus>
                    <option></option>
                        <?php for ($mois = 1 ; $mois <= 12 ; $mois++)
                {
                ?>
                                  <option value="<?php echo $mois ?>"><?php echo $mois; ?></option>
                <?php              
                }
                ?>  
                </select>
                <select name="AnneeExpiration" required autofocus>
                    <option></option>
                        <?php for ($annee = 2017 ; $annee <= 2047 ; $annee++)
                {
                ?>
                                  <option value="<?php echo $annee ?>"><?php echo $annee; ?></option>
                <?php              
                }
                ?>  
                </select>
            </p>
            <p>
                <label for="DelivrePar">Délivré par* </label>
                <input type="text" name="DelivrePar" value="" required autofocus>
            </p>
            <p>
                <label for="DepartementObtention">Département d'obtention des papiers d'identité* </label>
                <input type="text" name="DepartementObtention" value="" required autofocus>
            </p>
            <p>
                <label for="NumeroSecuSociale">Numéro de sécurité sociale* </label>
                <input type="text" name="NumeroSecuSociale" value="" required autofocus>
            </p>
            <center>
                <p id="foot-form">
                    Les champs avec un * sont obligatoires! 
                </p>
            </center>
            
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
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>