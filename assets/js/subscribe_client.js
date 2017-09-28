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
        for (i = 0; i < 4; i++) {
        tabcontent = document.getElementsByClassName("tabcontent");
            tabcontent[i].style.display = "none";
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
	
/* Vérif informations formulaire */

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
		if($(this).val().length < 1){ // si la taille de la c
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
		
		if(nomOk && prenomOk && mailOk && pwdOk && conf_pwdOk && adresseOk && villeOk && code_postaleOk && num_fixeOk && num_portableOk)
		{
			return true;
		}
		else
		{
			var elmt = document.getElementById('modal_form_err');
			elmt.style.display = "block";
			// ajouter MODAL a la place du alert avec un display none
			return false;
		}
	}