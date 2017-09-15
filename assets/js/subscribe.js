$(document).ready(function(){
	document.getElementById("defaultOpen").click(); 
	 $('[data-toggle="popover"]').popover();
});

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

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
	
/* Vérif informations formulaire dynamique JQuery */

$(document).ready(function(){
	
    var $nom = $('#nom'),
		$prenom = $('#prenom'),
		$sel = $('.sel'),
		$dateNaissance = $('#dateNaissance'),
		$email = $('#email'),
		$pwd = $('#pwd'),
		$confirm_pwd = $('#confirm_pwd'),
		$code_postale = $('#code_postale'),
		$num_fixe = $('#numfixe'),
		$num_portable = $('#numportable'),
		$nationalite = $('#nationalite'),
		$pays_naissance = $('#pays_naissance'),
		$ville_naissance = $('#ville_naissance'),
		$code_postale_naissance = $('#CodePostalNaissance'),
		$date_expiration = $('#date_expiration'),
		$numero_secu = $('#numeroSecuSociale'),
		$motivations = $('#motivations'),
		$conditions_gen = $('.ConditionGenerale'),
		$conditons_paiement = $('.ConditionPaiement'),
		$champ = $('.champ');
		
// 1. ETAT CIVIL
		$($champ).css({
				borderColor : 'red',
				color : 'red'
			});
		$($pwd).css({
				borderColor : 'red',
				color : 'red'
			});
		$($confirm_pwd).css({
				borderColor : 'red',
				color : 'red'
			});
		$($email).css({
				borderColor : 'red',
				color : 'red'
			});		
		

	$champ.keyup(function(){
		if($(this).val().length < 1){ // si la taille de la chaîne de caractères est inférieure à 1
			$(this).css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
			});
		 }
		 else{
			 $(this).css({ // si tout est bon, on le rend vert
			 borderColor : 'green',
			 color : 'green'
			});
		 }
	});
	
	$sel.click(function() {
		if($('.sel option:selected').text()) {
			$(this).css({
				borderColor : 'green',
				color : 'green'
			});
		}
	});
	
	$dateNaissance.click(function() {
		$(this).css({
					borderColor : 'green',
					color : 'green'
				});
	});
	
	// 2. IDENTIFIANTS
	
	 $email.focusout(function(){
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var emailaddressVal = $(this).val();
         
        if(emailaddressVal == '') {
            $(this).css({
				borderColor : 'red',
				color : 'red'
			});
        } 
		else if(!emailReg.test(emailaddressVal)) {
            $(this).css({
				borderColor : 'red',
				color : 'red'
			});
        } 
		else {
            $(this).css({
				borderColor : 'green',
				color : 'green'
			});
        }
    });
	
	$pwd.keyup(function(){
		if($(this).val().length < 5){ // si la taille de la chaîne de caractères est inférieure à 1
			$(this).css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
			});
		 }
		 else{
			 $(this).css({ // si tout est bon, on le rend vert
			 borderColor : 'green',
			 color : 'green'
			});
		 }
	});
	
	$confirm_pwd.keyup(function(){
		if($(this).val() != $pwd.val()){ // si différent de pwd
			$(this).css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
			});
		 }
		 else{
			 $(this).css({ // si tout est bon, on le rend vert
			 borderColor : 'green',
			 color : 'green'
			});
		 }
	});
	
//3 COORDONNEES
	
	 $code_postale.focusout(function(){
        var code_postaleReg = /^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/;
        var code_postaleVal = $(this).val();
         
        if(code_postaleVal == '') {
            $(this).css({
				borderColor : 'red',
				color : 'red'
			});
        } 
		else if(!code_postaleReg.test(code_postaleVal)) {
            $(this).css({
				borderColor : 'red',
				color : 'red'
			});
        } 
		else {
            $(this).css({
				borderColor : 'green',
				color : 'green'
			});
        }
    });
	
	$num_fixe.focusout(function(){
        var num_fixeReg = /(01|02|03|04|05|08|09)[0-9]{8}$/;
        var num_fixeVal = $(this).val();
         
        if(num_fixeVal == '') {
            $(this).css({
				borderColor : 'red',
				color : 'red'
			});
        } 
		else if(!num_fixeReg.test(num_fixeVal)) {
            $(this).css({
				borderColor : 'red',
				color : 'red'
			});
        } 
		else {
            $(this).css({
				borderColor : 'green',
				color : 'green'
			});
        }
    });
	
	$num_portable.focusout(function(){
        var num_portableReg = /^(0|(00|\+)33)[67][0-9]{8}$/;
        var num_portableVal = $(this).val();
         
        if(num_portableVal == '') {
            $(this).css({
				borderColor : 'red',
				color : 'red'
			});
        } 
		else if(!num_portableReg.test(num_portableVal)) {
            $(this).css({
				borderColor : 'red',
				color : 'red'
			});
        } 
		else {
            $(this).css({
				borderColor : 'green',
				color : 'green'
			});
        }
    });

// 3. MON IDENTITE
	
	$nationalite.keyup(function(){
		if($(this).val().length < 4){
			$(this).css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
			});
		 }
		 else{
			 $(this).css({ // si tout est bon, on le rend vert
			 borderColor : 'green',
			 color : 'green'
			});
		 }
	});
	
	$pays_naissance.keyup(function(){
		if($(this).val().length < 4){
			$(this).css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
			});
		 }
		 else{
			 $(this).css({ // si tout est bon, on le rend vert
			 borderColor : 'green',
			 color : 'green'
			});
		 }
	});
	
	$ville_naissance.keyup(function(){
		if($(this).val().length < 1){
			$(this).css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
			});
		 }
		 else{
			 $(this).css({ // si tout est bon, on le rend vert
			 borderColor : 'green',
			 color : 'green'
			});
		 }
	});
	
	$code_postale_naissance.focusout(function(){
        var code_postale_naissanceReg = /^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/;
        var code_postale_naissanceVal = $(this).val();
         
        if(code_postale_naissanceVal == '') {
            $(this).css({
				borderColor : 'red',
				color : 'red'
			});
        } 
		else if(!code_postale_naissanceReg.test(code_postale_naissanceVal)) {
            $(this).css({
				borderColor : 'red',
				color : 'red'
			});
        } 
		else {
            $(this).css({
				borderColor : 'green',
				color : 'green'
			});
        }
    });
	
	$date_expiration.click(function() {
		$(this).css({
					borderColor : 'green',
					color : 'green'
				});
	});
	
	$numero_secu.keyup(function(){
		if($(this).val().length != 15){
			$(this).css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
			});
		 }
		 else{
			 $(this).css({ // si tout est bon, on le rend vert
			 borderColor : 'green',
			 color : 'green'
			});
		 }
	});
	
// 4. TRAVAILLER POUR PERISCOLARITE
	
	$motivations.keyup(function(){
		if($(this).val().length < 30){
			$(this).css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
			});
		 }
		 else{
			 $(this).css({ // si tout est bon, on le rend vert
			 borderColor : 'green',
			 color : 'green'
			});
		 }
	});
});

// Vérification des champs avant envoi serveur	
	function verif_nom(champ) {
		if(champ.value.length < 1)
		{
			surligne(champ, true);
			return false;
		}
	   else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	function verif_prenom(champ) {
		if(champ.value.length < 1)
		{
			surligne(champ, true);
			return false;
		}
	   else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	function verif_email(champ) {
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var emailaddressVal = champ.value;
		if(emailaddressVal == '')
		{
			surligne(champ, true);
			return false;
		}
	   else if(!emailReg.test(emailaddressVal)) 
		{
			surligne(champ, true);
			return false;
		}
		else
		{
            surligne(champ, false);
			return true;
        }
	}

	var mdp;
    function verif_pwd(pwd) {
		mdp = pwd.value;
		if(pwd.value.length < 5)
		{
			surligne(pwd, true);
			return false;
		}
	   else
		{
			surligne(pwd, false);
			return true;
		}
	}
	
	function verif_conf_pwd(champ) {
		if(champ.value != mdp)
		{
			surligne(champ, true);
			return false;
		}
	   else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	function verif_adresse(champ) {
		if(champ.value.length < 1)
		{
			surligne(champ, true);
			return false;
		}
	   else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	function verif_ville(champ) {
		if(champ.value.length < 1)
		{
			surligne(champ, true);
			return false;
		}
	   else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	
	function verif_code_postale(champ) {
		var code_postaleReg = /^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/;
        var code_postaleVal = champ.value;
		
		if(code_postaleVal == '') {
            surligne(champ, true);
			return false;
        } 
		else if(!code_postaleReg.test(code_postaleVal)) {
            surligne(champ, true);
			return false;
        } 
		else {
			surligne(champ, false);
			return true;
        }
	}
	
	function verif_num_fixe(champ) {
		var num_fixeReg = /(01|02|03|04|05|08|09)[0-9]{8}$/;
        var num_fixeVal = champ.value;
		
		if(num_fixeVal == '') {
			surligne(champ, true);
			return false;
        } 
		else if(!num_fixeReg.test(num_fixeVal)) {
            surligne(champ, true);
			return false;
        } 
		else {
            surligne(champ, false);
			return true;
        }
	}
	
	function verif_num_portable(champ) {
		var num_portableReg = /^(0|(00|\+)33)[67][0-9]{8}$/;			
        var num_portableVal = champ.value;
		
		if(num_portableVal == '') {
			surligne(champ, true);
			return false;
        } 
		else if(!num_portableReg.test(num_portableVal)) {
            surligne(champ, true);
			return false;
        } 
		else {
            surligne(champ, false);
			return true;
        }
	}
	
	function verif_nationalite(champ) {
		if(champ.value.length < 4)
		{
			surligne(champ, true);
			return false;
		}
	   else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	function verif_pays_naissance(champ) {
		if(champ.value.length < 4)
		{
			surligne(champ, true);
			return false;
		}
	   else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	function verif_ville_naissance(champ) {
		if(champ.value.length < 1)
		{
			surligne(champ, true);
			return false;
		}
	   else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	function verif_code_postale_naissance(champ) {
		var code_postale_naissanceReg = /^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/;
        var code_postale_naissanceVal = champ.value;
		
		if(code_postale_naissanceVal == '') {
            surligne(champ, true);
			return false;
        } 
		else if(!code_postale_naissanceReg.test(code_postale_naissanceVal)) {
            surligne(champ, true);
			return false;
        } 
		else {
			surligne(champ, false);
			return true;
        }
	}
	
	function verif_delivre_par(champ) {
		if(champ.value.length < 1)
		{
			surligne(champ, true);
			return false;
		}
	   else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	function verif_dep_papier(champ) {
		if(champ.value.length < 1)
		{
			surligne(champ, true);
			return false;
		}
		else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	function verif_numero_secu(champ) {
		if(champ.value.length != 15)
		{
			surligne(champ, true);
			return false;
		}
		else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	function verif_motivations(champ) {
		if(champ.value.length < 30)
		{
			surligne(champ, true);
			return false;
		}
		else
		{
			surligne(champ, false);
			return true;
		}
	}
	
	function verif_conditions_gen(champ) {
		if(document.getElementById('ConditionGenerale').checked)
		{
			return true;
		} 
		else
		{
			return false;
		}
	}
	
	function verif_conditions_paiement(champ) {
		if(document.getElementById('ConditionPaiement').checked)
		{
			return true;
		} 
		else
		{
			return false;
		}
	}
	
	function verifForm(f) {
		// Evite le && paresseux
		var nomOk = verif_nom(f.nom);
		var prenomOk = verif_prenom(f.prenom);
		var mailOk = verif_email(f.email);
		var pwdOk = verif_pwd(f.pwd);
		var conf_pwdOk = verif_conf_pwd(f.confirm_pwd);
		var adresseOk = verif_adresse(f.adresse);
		var villeOk = verif_ville(f.ville);
		var code_postaleOk = verif_code_postale(f.code_postale);
		var num_fixeOk = verif_num_fixe(f.num_fixe);
		var num_portableOk = verif_num_portable(f.num_portable);
		var nationaliteOk = verif_nationalite(f.nationalite);
		var pays_naissanceOk = verif_pays_naissance(f.pays_naissance);
		var ville_naissanceOk = verif_ville_naissance(f.ville_naissance);
		var code_postale_naissanceOk = verif_code_postale_naissance(f.CodePostalNaissance);
		var delivre_par_Ok = verif_delivre_par(f.delivre_par);
		var dep_papierOk = verif_dep_papier(f.departement_obtention);
		var numero_secuOk = verif_numero_secu(f.numeroSecuSociale);
		var motivationsOk = verif_motivations(f.motivations);
		var conditions_genOk = verif_conditions_gen(f.ConditionGenerale);
		var conditions_paieOk = verif_conditions_paiement(f.ConditionPaiement);
		
		if(nomOk && prenomOk && mailOk && pwdOk && conf_pwdOk && adresseOk && villeOk && code_postaleOk && num_fixeOk && num_portableOk && nationaliteOk && pays_naissanceOk 
		&& ville_naissanceOk && code_postale_naissanceOk && delivre_par_Ok && dep_papierOk && numero_secuOk && motivationsOk && conditions_genOk && conditions_paieOk) 
		{
			return true;
		}
		else
		{
			alert('/!\ Formulaire incomplet !')
			// ajouter MODAL a la place du alert avec un display none
			return false;
		}
	}


	



	