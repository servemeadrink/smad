<?php include("ressources/incs/header.php"); ?>

    <div id="zone_inscription">
			<div id="your_option">
				<h1>Sign up</h1>
                <h2>Choose your option : <span id="descript_choice"></span></h2>

				<div class="msg_error" align="center" style="color: red; margin-bottom: 10px;"></div>

				<form name="inscription" id="form_inscription2" action="#" method="post">
				<fieldset>
				<label id="user_option" for="user">
						<input name="u_nature" value="0" type="radio" id="user" style="visibility: hidden; width:0; height: 0;" />
						<img src="ressources/images/user2.png" id="user_img" />
                        <h3>I’m an individual</h3>
                        <p>I want to enjoy my drink passes.</p>
				</label>
					
				<label id="company_option" for="company">
						<input name="u_nature" value="1" type="radio" id="company" style="visibility: hidden; width:0; height: 0;" />
						<img src="ressources/images/entreprise2.png" id="company_img" />
                        <h3>I’m a professional</h3>
                        <p>I’ve got a business<br/>
						and I want to offer different passes.</p>
				</label>	
					
                <div id="signin_redirection"><input id"submit" type="submit" value="Choose" name="" /></div>
                </fieldset>
				</form>
			</div>
  </div>

	<script src="ressources/scripts/ajaxInscription.js"></script>

<?php include("ressources/incs/footer.php"); ?>
