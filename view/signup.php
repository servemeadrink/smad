<?php include("ressources/incs/header.php"); ?>

<div id="zone_inscription">
	<div id="inscription">
		<h1>Sign up</h1>

		<div class="fb-login-button"><img src="ressources/images/facebook_signup_icon.png"/>Sign up with Facebook</div>
		<div class="google-login-button"><img src="ressources/images/google_plus_signup_icon.png"/>Sign up with Google+</div>
		<div class="separation"></div>
		<h3>Or sign up with your email</h3>

		<div class="msg_error" align="center" style="color: red; margin-bottom: 10px;"></div>
		<form name="inscription" id="form_inscription" action="#" method="post">
			<fieldset>
				<input type="text" name="u_firstname" placeholder="First name" />
				<input type="text" name="u_lastname" placeholder="Last name" />
				<input type="email" name="u_email" placeholder="E-mail" />
				<input type="password" name="u_password" placeholder="Password" />
				<input type="password" name="u_confirm" placeholder="Password confirmation" />

				<div id="msg_error">
				</div>
				<input id="submit" type="submit" name="inscript" value="Sign up" />
			</fieldset>
		</form>
		<div id="signin_redirection">Already got an account? <a href="index.php?url=signin">Sign in</a></div>
	</div>
</div>

<script src="ressources/scripts/ajaxInscription.js"></script>

<?php include("ressources/incs/footer.php"); ?>
