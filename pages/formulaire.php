<?php
session_start();
$idsession=session_id();

include('header.html');
?>

	<div>
		<div class="popup-form form-wr ">
			<form method="POST" action="../contact.php">
				<a href="../index.php">Retour à l'accueil</a>
				<fieldset>
					<legend>Je suis : </legend>
					<div>
						<input type="radio" id="collectivite" name="demandeur" value="collectivite">
						<label for="collectivite" class="form-label">une collectivité</label>
					</div>
					<div>
						<input type="radio" id="commercant" name="demandeur" value="commercant">
						<label for="commercant" class="form-label">un commerçant</label>
					</div>
					<div>
						<input type="radio" id="porteur" name="demandeur" value="porteur">
						<label for="porteur" class="form-label">un porteur de projet</label>
					</div>
					<div>
						<input type="radio" id="autre" name="demandeur" value="autre" 
						checked>
						<label for="autre" class="form-label">autre</label>
					</div>
				</fieldset>
				<fieldset>
					<legend>Mon besoin :</legend>
					
					<div>
						<input type="checkbox" id="proprietaire" name="proprietaire">
						<label for="proprietaire" class="form-label">J'ai un local à proposer.</label>
					</div>
					<div>
						<input type="checkbox" id="locataire" name="locataire" checked>
						<label for="locataire" class="form-label">Je recherche un local disponible.</label>
					</div>
				</fieldset>
				
				<fieldset class="form-field">
					<legend>Mon département :</legend>
					<select id="departement" name="departement" class="form-control">
						<option value="77">77 - Seine-et-Marne</option>
						<option value="75">75 - Paris</option>
						<option value="78">78 - Yvelines</option>
						<option value="91">91 - Essonne</option>
						<option value="92">92 - Hauts-de-Seine</option>
						<option value="93">93 - Seine-Saint-Denis</option>
						<option value="94">94 - Val-de-Marne</option>
						<option value="95">95 - Val d'Oise</option>
					</select>
				</fieldset>
				
				<fieldset class="form-field">
					<input class="form-control" type="text" id="user_mail" name="user_mail" placeholder="Mon adresse email" required>
					<textarea class="form-control" id="mail_area" name="mail_area" placeholder="Je détaille mon besoin ici en précisant mes coordonnées pour être recontacté."></textarea>
				</fieldset>
				
				<div class="form-field">
					<p>Captcha : </p>
					<img src="https://unmetierpresdechezmoi.fr/captcha.php?id=<?php echo $idsession; ?>">
					<input type="text" id="captcha_answer" name="captcha_answer" class="form-control" placeholder="Réponse au captcha">
				</div>
				
				<button type="submit" class="btn2" name="valid_mail">Envoyer mon message</button>
			</form>
        </div>
    </div>
	
<?php
include('footer.html');
?>