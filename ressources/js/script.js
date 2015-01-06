// JavaScript Document//On attend que jquery soit lancé

			
			// Menu mobile début
			$(document).ready(function(){
				$("#mobile_menu_icone").click(function(){
					$("#mobile_menu").animate({
						left: '0'
					},600);
				});
				$("#mobile_menu_close").click(function(){
					$("#mobile_menu").animate({
						left: '-100%'
					},200);
				});// Menu mobile fin
				
				// Preload images
				$.preloadImages = function() {
				  for (var i = 0; i < arguments.length; i++) {
					$("<img />").attr("src", arguments[i]);
				  }
				}

				$.preloadImages("ressources/images/pro_hover.jpg","ressources/images/perso_hover.jpg");

				$('#user_option').click(function(){
					$('#user_img').attr('src',"ressources/images/user1.png");
					$('#company_img').attr('src',"ressources/images/entreprise2.png");
					$('#descript_choice').html("You are individual");
					$('#user_option').css('background-image',"linear-gradient(rgba(255,255,255,1) 0%, rgba(246,246,250,1) 100%)");
					$('#company_option').css('background-image',"none");
				});

				$('#company_option').click(function(){
					$('#company_img').attr('src',"ressources/images/entreprise1.png");
					$('#user_img').attr('src',"ressources/images/user2.png");
					$('#descript_choice').html("You are professional");
					$('#company_option').css('background-image',"linear-gradient(rgba(255,255,255,1) 0%, rgba(246,246,250,1) 100%)");
					$('#user_option').css('background-image',"none");
				});
			});
			
			
			
			(function ($) {

			})(jQuery);
			
			
			//Le module ajax
			
			//--------------------------------------- LORS DU SUBMIT, LA FONCTION AJAX -----------------------------------
			
			$("#form_inscription").on("submit", function(e){
				e.preventDefault();
				
				$.ajax({
					
					//Url du traitement serveur
					url:'controller/inscription.php',
					
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
						traiterFlux(data);
					},
					
					// Traitement en cas d'erreur : on reçoit le flux dans data
					error: function(jqXHR, textStatus, errorThrown){
						console.log("Erreur d'execution AJAX");
					}
					
				});
			
			});
			
			//------------------- LA FONCTION TRAITER FLUX
			
			function traiterFlux(flux){
			
			var ERROR = '';
			
				switch( flux['ERROR'] ) {
					case 1:
						ERROR = 'Veuillez renseignez tous les champs.';
						break;
						
					case 2:
						ERROR = 'Un compte associé à ce mail existe déjà.';
						break;
					
					case 3:
						ERROR = 'Veuillez choisir la nature de votre compte.';
						break;
						
					case 4:
						ERROR = 'Le mot de passe doit être identtique dans les deux champs.';
						break;
					
					case 5:
						ERROR = 'Vous êtes maitnenant inscris !';
						break;
				}
				
				affiche_error(ERROR);
			}
			
			//--------------------------- LA FONCTION AFFICHE ERROR
			
			function affiche_error(ERROR){
				$("#msg_error").html(ERROR);
			}