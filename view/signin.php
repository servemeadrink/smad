<?php include("ressources/incs/header.php"); ?>
    
<div id="zone_inscription">
			<div id="inscription">
				<h1>Sign in</h1>
				
                <div class="fb-login-button"><img src="ressources/images/facebook_signup_icon.png"/>Sign up with Facebook</div>
                <div class="google-login-button"><img src="ressources/images/google_plus_signup_icon.png"/>Sign up with Google+</div>
                <div class="separation"></div>
                <h3>Or sign in with your email</h3>

				<div class="msg_error" align="center" style="color: red; margin-bottom: 10px;"></div>
				<form name="connexion" id="form_connexion" action="#" method="post">
				<fieldset>
					<input type="email" name="co_email" placeholder="E-mail" />
					<input type="password" name="co_password" placeholder="Password" />
					
					<div id="msg_error">
					</div>
					<input id="submit" type="submit" name="inscript" value="Log in" />
                </fieldset>
				</form>
                <div id="signin_redirection">Not registered yet? <a href="index.php?url=signin">Sign up</a></div>
			</div>
	</div>

	<script src="ressources/scripts/ajaxConnexion.js"></script>

<?php include("ressources/incs/footer.php"); ?>





