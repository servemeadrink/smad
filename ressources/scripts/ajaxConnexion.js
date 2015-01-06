//Le module ajax

//--------------------------------------- LORS DU SUBMIT, LA FONCTION AJAX -----------------------------------

$("#form_connexion").on("submit", function(e){
		e.preventDefault();
		
		$.ajax({
			
			//Url du traitement serveur
			url: "index.php?url=connexion",
			
			//Type de requête
			type:'post',
			
			//Paramètre envoyés
			data: $(this).serialize(),
			
			//On précuse le type de flux
			dataType: 'json',
			
			//Traitement en cas de succès : on reçoit le flux dans data
			success: function(data){
				//Affiche l'objet transmis par l'ajax
				console.log(data);
				//Lance la fonction transférer flux
				traiterFluxConnexion(data);
			},
			
			// Traitement en cas d'erreur : on reçoit le flux dans data
			error: function(jqXHR, textStatus, errorThrown){
				console.log("Erreur d'execution AJAX");
			}
			
		});

	});

//------------------- LA FONCTION TRAITER FLUX

function traiterFluxConnexion(flux){

var ERROR = '';

	switch( flux['ERROR'] ) {
		case 1:
			ERROR = 'Please fill all the fields.';
			break;
			
		case 2:
			ERROR = 'Account doesn\'t exists.';
			break;
		
		case 3:
			ERROR = 'Wrong password.';
			break;
			
		case 4:
			//Redirige le particulier vers l'index2
			document.location.href="index.php?url=showcoupons";
			break;
		
		case 5:
			//Redirige l'entreprise vers la page de gestion
			document.location.href="index.php?url=addbusiness";
			break;
	}
	
	affiche_error_connexion(ERROR);
}

//--------------------------- LA FONCTION AFFICHE ERROR

function affiche_error_connexion(ERROR){
	$(".msg_error").html(ERROR);
}