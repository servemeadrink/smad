$(document).ready(function(){

	/*$('#button').on('click', function() {
	  ga('send', 'event', 'button', 'click', 'nav-buttons');
	});*/
	
	$('#add_business').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'CTA', 'add-business');
	});
	
	$('#sign_in').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'CTA', 'sign-in');
	});
	
	$('#tracking_howtouse').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'CTA', 'how-to-use');
	});
	
	$('#text-pro').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'CTA', 'bloc-pro');
	});
	
	$('#text-individual').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'CTA', 'bloc-individual');
	});
	
	$('#tracking_signup').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'CTA', 'sign-up');
	});
	
	$('#step1').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'steps', 'step1');
	});
	
	$('#step2').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'steps', 'step2');
	});
	
	$('#step3').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'steps', 'step3');
	});
	
	$('#footer-sitemap').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'footer', 'footer-sitemap');
	});
	
	$('#footer-contact').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'footer', 'footer-contact');
	});
	
	$('#footer-reseaux').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'footer', 'footer-contact');
	});
	
	$('#newsletterbox').on('click', function() {
	  ga('send', 'event', 'homepagev3', 'footer', 'footer-newsletter');
	});
	
	$('#name').on('click', function() {
	  ga('send', 'event', 'flux', 'addbusiness-form', 'form-name');
	});
	
	$('#description').on('click', function() {
	  ga('send', 'event', 'flux', 'addbusiness-form', 'form-description');
	});
	
	$('#country').on('click', function() {
	  ga('send', 'event', 'flux', 'addbusiness-form', 'form-country');
	});
	
	$('#city').on('click', function() {
	  ga('send', 'event', 'flux', 'addbusiness-form', 'form-city');
	});
	
	$('#zip_code').on('click', function() {
	  ga('send', 'event', 'flux', 'addbusiness-form', 'form-zipcode');
	});

	$('#address').on('click', function() {
		  ga('send', 'event', 'flux', 'addbusiness-form', 'form-address');
	});
	
	$('#email').on('click', function() {
		  ga('send', 'event', 'flux', 'addbusiness-form', 'form-email');
	});	
	
	$('#phone').on('click', function() {
		  ga('send', 'event', 'flux', 'addbusiness-form', 'form-phone');
	});
	
	$('#first_img').on('click', function() {
		  ga('send', 'event', 'flux', 'addbusiness-upload', 'first_img');
	});
	
	$('#first_upload').on('click', function() {
		  ga('send', 'event', 'flux', 'addbusiness-upload', 'first_upload');
	});
	
	$('.dimensions').on('click', function() {
		  ga('send', 'event', 'flux', 'addbusiness-upload', 'dimensions-desc');
	});
	
	$('#showroom_img').on('click', function() {
		  ga('send', 'event', 'flux', 'addbusiness-upload', 'showroom-img');
	});
	
	$('#showroom_upload').on('click', function() {
		  ga('send', 'event', 'flux', 'addbusiness-upload', 'showroom-upload');
	});
	
	$('#addbusiness_submit').on('click', function() {
		  ga('send', 'event', 'flux', 'addbusiness-form', 'addbusiness_preview');
	});
	
	$('#big-image-etablissement').on('click', function() {
		  ga('send', 'event', 'flux', 'etablissement', 'big-image');
	});
	
	$('#big-image-etablissement').on('click', function() {
		  ga('send', 'event', 'flux', 'etablissement', 'big-image');
	});
	
	$('#big-image-etablissement').on('click', function() {
		  ga('send', 'event', 'flux', 'etablissement', 'etablissement-big-image');
	});
	
	$('#description-image-etablissement').on('click', function() {
		  ga('send', 'event', 'flux', 'etablissement', 'etablissement-description-image');
	});
	
	$('#etablissement_nom').on('click', function() {
		  ga('send', 'event', 'flux', 'etablissement', 'etablissement-nom');
	});
	
	$('#etablissement-favorite-image').on('click', function() {
		  ga('send', 'event', 'flux', 'etablissement', 'etablissement-favorite-image');
	});
	
	$('.etablissement_contact').on('click', function() {
		  ga('send', 'event', 'flux', 'etablissement', 'etablissement_contact');
	});
	
	$('#available_drink_passes').on('click', function() {
		  ga('send', 'event', 'flux', 'etablissement', 'available_drink_passes');
	});
	
});