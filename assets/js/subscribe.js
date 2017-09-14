$(document).ready(function(){
	document.getElementById("defaultOpen").click(); 
	 $('[data-toggle="popover"]').popover();
});

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
		$motivations = $('#motivforminter'),
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
        var num_fixeReg = /^(0|(00|\+)33)[67][0-9]{8}$/;
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
        var num_portableReg = /^(06|07)[0-9]{8}$/;
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

// Vérification des champs avant envoi serveur

	function verif_champ($champ) {
		if($nom.val().length >= 1)
		{
			surligne($champ, false);
			return true;
		}
		else
		{
			surligne(champ, true);
			return false;
		}
	}
	
	function verif_mail($email) {
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var emailaddressVal = $(this).val();
         
        if(emailaddressVal == '') {
            surligne(champ, true);
			return false;
        } 
		else if(!emailReg.test(emailaddressVal)) {
            surligne(champ, true);
			return false;
        } 
		else {
			surligne($champ, false);
			return true;
        }
	}
	
	function verif_pwd($pwd) {
		if($pwd.val().length >= 1)
		{
			surligne($champ, false);
			return true;
		}
		else
		{
			surligne(champ, true);
			return false;
		}
	}
	
	function verif_conf_pwd($confirm_pwd) {
		if($(this).val() == $pwd.val()){
		
			surligne($champ, false);
			return true;
		}
		else
		{
			surligne(champ, true);
			return false;
		}
	}

	function verif_code_postale($code_postale) {
		var code_postaleReg = /^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/;
        var code_postaleVal = $(this).val();
         
        if(code_postaleVal == '') {
            surligne(champ, true);
			return false;
        } 
		else if(!code_postaleReg.test(code_postaleVal)) {
            surligne(champ, true);
			return false;
        } 
		else {
            surligne($champ, false);
			return true;
        }
	}

	function verif_num_fixe($num_fixe) {
		var num_fixeReg = /^(0|(00|\+)33)[67][0-9]{8}$/;
        var num_fixeVal = $(this).val();
         
        if(num_fixeVal == '') {
			surligne(champ, true);
			return false;
        } 
		else if(!num_fixeReg.test(num_fixeVal)) {
            surligne(champ, true);
			return false;
        } 
		else {
            surligne($champ, false);
			return true;
		}
	}
	
	function verif_num_portable($num_portable) {
		var num_portableReg = /^(06|07)[0-9]{8}$/;
        var num_portableVal = $(this).val();
         
        if(num_portableVal == '') {
            surligne(champ, true);
			return false;
        } 
		else if(!num_portableReg.test(num_portableVal)) {
            surligne(champ, true);
			return false;
        } 
		else {
            surligne($champ, false);
			return true;
        }
	}
	
	function verif_nationalite($nationalite) {
		if($(this).val().length < 4){
			surligne(champ, true);
			return false;
		 }
		 else{
			surligne($champ, false);
			return true;
		}
	}
	
	function verif_pays_naissance($pays_naissance) {
		if($(this).val().length < 4){
			surligne(champ, true);
			return false;
		 }
		 else{
			surligne($champ, false);
			return true;
		}
	}
	
	function verif_ville_naissance($ville_naissance) {
		if($(this).val().length < 1){
			surligne(champ, true);
			return false;
		 }
		 else{
			surligne($champ, false);
			return true;
		}
	}
	
	function verif_code_postale_naissance($code_postale_naissance) {
		var code_postale_naissanceReg = /^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/;
        var code_postale_naissanceVal = $(this).val();
         
        if(code_postale_naissanceVal == '') {
            surligne(champ, true);
			return false;
        } 
		else if(!code_postale_naissanceReg.test(code_postale_naissanceVal)) {
            surligne(champ, true); // CHANGER CHAMP EN $code_postale_naissance PARTOUT !!!!!!
			return false;
        } 
		else {
            surligne($champ, false);
			return true;
        }
	}
	
	function verif_code_num_secu($numero_secu) {
		if($(this).val().length != 15){
			surligne(champ, true);
			return false;
		 }
		 else{
			surligne($champ, false);
			return true;
		}
	}
	
	function verif_motivations($motivations) {
		if($(this).val().length < 30){
			surligne(champ, true);
			return false;
		 }
		 else{
			surligne($champ, false);
			return true;
		}
	}
	// A VERIFIER CONDITIONS GENERALES + CONDITIONS PAIEMENT
	// CHANGER LES THIS EN L ELEMENT VOULUE
	// FAIRE REGEX POUR DATE /!\ HTML 5
	// Faire fonction booleene finale avant le submit serveur
});
	



	