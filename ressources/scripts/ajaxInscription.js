//Le module ajax

//--------------------------------------- LORS DU SUBMIT, LA FONCTION AJAX -----------------------------------

$("#form_inscription").on("submit", function(e){
		e.preventDefault();
		
		$.ajax({
			
			//Url du traitement serveur
			url: "index.php?url=inscription",
			
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
				traiterFluxInscription(data);
			},
			
			// Traitement en cas d'erreur : on reçoit le flux dans data
			error: function(jqXHR, textStatus, errorThrown){
				console.log("Erreur d'execution AJAX");
			}
			
		});

	});

$("#form_inscription2").on("submit", function(e){
	e.preventDefault();

	$.ajax({

		//Url du traitement serveur
		url: "index.php?url=inscription2",

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
			traiterFluxInscription(data);
		},

		// Traitement en cas d'erreur : on reçoit le flux dans data
		error: function(jqXHR, textStatus, errorThrown){
			console.log("Erreur d'execution AJAX");
		}

	});

});
//------------------- LA FONCTION TRAITER FLUX

function traiterFluxInscription(flux){

var ERROR = '';

	switch( flux['ERROR'] ) {
		case 1:
			ERROR = 'Please fill all the fields.';
			break;
			
		case 2:
			ERROR = 'An account with this e-mail already exists.';
			break;
		
		case 3:
			ERROR = 'Please chose a profile of account.';
			break;
			
		case 4:
			ERROR = 'Passwords have to be the same in the two fields.';
			break;
			
		case 5:
			//Redirige le particulier vers l'index2
			document.location.href="index.php?url=you-option";
			break;

		case 6:
			//Redirige le particulier vers l'index2
			document.location.href="index.php?url=showcoupons";
			break;

		case 7:
			//Redirige le particulier vers l'index2
			document.location.href="index.php?url=addbusiness";
			break;
	}
	
	affiche_error_inscription(ERROR);
}

//--------------------------- LA FONCTION AFFICHE ERROR

function affiche_error_inscription(ERROR){
	$(".msg_error").html(ERROR);
}