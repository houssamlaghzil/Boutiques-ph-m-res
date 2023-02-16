<?php
/**
Boutiques éphémères
**/

//Structure de page
session_start();
$idsession=session_id();
?>

<body>
<header>
	<div id="titre"><a href="https://www.seineetmarne.cci.fr/"><img src = "import/logo_boutique_ephemere.png" alt="logo"></a>
	</div>
</header>
<content>
	<div class="blocDef">
		<p>
			<a href="https://www.facebook.com/VivonsLocal77/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
			</a>
		</p><p>
			<a href="https://www.facebook.com/cciseineetmarne"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
			</a>
		</p><p>
			<a href="https://www.youtube.com/channel/UCLJzxiykKRRzR1ujBOFlvyg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
			</a>
		</p>
		<div class="blocDef, def">
			<p>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 96c-17.7 0-32 14.3-32 32s-14.3 32-32 32s-32-14.3-32-32C0 75 43 32 96 32h97c70.1 0 127 56.9 127 127c0 52.4-32.2 99.4-81 118.4l-63 24.5 0 18.1c0 17.7-14.3 32-32 32s-32-14.3-32-32V301.9c0-26.4 16.2-50.1 40.8-59.6l63-24.5C240 208.3 256 185 256 159c0-34.8-28.2-63-63-63H96zm48 384c-22.1 0-40-17.9-40-40s17.9-40 40-40s40 17.9 40 40s-17.9 40-40 40z"/></svg>
			</p><p>
			Ce site s'adresse aux commerçants débutant leur activité et cherchant un local dédié à l'accueil de boutiques éphémères.
			"Boutiques éphémères" est une initiative portée par la CCI Seine-et-Marne,
			en partenariat avec les communes du territoire.
			</p>
		</div>
	</div>
	
	<div class="wrapMap">
		<div class = "leftMap">
			<div id="map" class="map"></div>
			<div id="legende" class="blocLegende">
				<p><img src = "icones/blue.png" class="couleurLegende">Boutique éphémère</p>
				<p><img src = "icones/blue.png" class="couleurLegende">Projet de boutique éphémère</p>
			</div>
		</div>
		<div class="rightMap">
			<form method="POST" action="contact.php" class="blocContact">
				<fieldset>
					<legend>Je suis : </legend>
					<div>
						<input type="radio" id="collectivite" name="demandeur" value="collectivite">
						<label for="collectivite">une collectivité</label>
					</div>
					<div>
						<input type="radio" id="commercant" name="demandeur" value="commercant">
						<label for="commercant">un commerçant</label>
					</div>
					<div>
						<input type="radio" id="porteur" name="demandeur" value="porteur">
						<label for="porteur">un porteur de projet</label>
					</div>
					<div>
						<input type="radio" id="autre" name="demandeur" value="autre" 
						checked>
						<label for="autre">autre</label>
					</div>
				</fieldset>
				<fieldset>
					<legend>Mon besoin</legend>

					<div>
					  <input type="checkbox" id="proprietaire" name="proprietaire">
					  <label for="proprietaire">J'ai un local à proposer.</label>
					</div>

					<div>
					  <input type="checkbox" id="locataire" name="locataire" checked>
					  <label for="locataire">Je recherche un local disponible.</label>
					</div>
				</fieldset>
				
				<fieldset>
					<legend>Mon département</legend>
					<select id="departement" name="departement">
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
				
				<input type="text" id="user_mail" name="user_mail" placeholder="Mon adresse email">
				<textarea id="mail_area" name="mail_area" placeholder="Je détaille mon besoin ici en précisant mes coordonnées pour être recontacté."></textarea>

				<p>Captcha : </p>
				<img src="https://unmetierpresdechezmoi.fr/captcha.php?id=<?php echo $idsession; ?>">
				<input type="text" id="captcha_answer" name="captcha_answer" placeholder="Réponse au captcha">

				<input type="submit" class="contact" name="valid_mail" value="Envoyer mon message">
			</form>
			
			
		</div>
		
	</div>
	
			
	<div id="info" class="closedInfo">
		<div class="wrapInfo">
			<button id="closeInfo">X</button>  
			<h1 id="hInfo">Cliquez sur une boutique pour en savoir plus</h1>
			<p id="pInfos"></p>
		</div>
		<div id="image_apercu" style="visibility:hidden"> 
			<img id="photo" class="photosInfo" src="" border="2">
		</div>
		<div id="image_apercu2" style="visibility:hidden"> 
			<img id="photo2" class="photosInfo" src="" border="2">
		</div>
		<div id="image_apercu3" style="visibility:hidden"> 
			<img id="photo3" class="photosInfo" src="" border="2">
		</div>
	</div>

</content>
<footer>
	<p>Mentions légales et RGPD</p>
	<p>Les données personnelles le cas échéant collectées via le formulaire de contact le sont pour assurer le traitement de votre demande de renseignement. Elles sont conservées pour une durée de cinq ans. Ces informations ne sont pas communiquées à des tiers en dehors du Groupe CCI Paris Ile-de-France et des collectivités locales partenaires. En cliquant sur "envoyer" vous consentez à ce que vos données soient utilisées à des fins de prospection et de communication par le groupe CCI Paris Île-de-France et ses collectivités locales partenaires. Les données personnelles éventuellement disponibles sur le site sont collectées pour permettre la mise en relation des porteurs de projet, commerçants, propriétaires de locaux et collectivités. Les données personnelles le cas échéant collectées sur l'interface d'administration du site le sont pour assurer la connexion et le bon fonctionnement du portail. Elles sont conservées le temps de votre utilisation du site.
		Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée et au Règlement (UE) 2016-679 sur la protection des données, dans le cadre et les limites de ces textes, vous disposez d'un droit d'accès, de modification et de rectification relatif aux données vous concernant. Si vous avez consenti à ce que vos données soient utilisées à des fins de prospection et de communication, vous disposez également d’un droit de limitation, d'opposition et de suppression. Ces droits s'exercent en vous adressant à pdp.ddat@seineetmarne.cci.fr ou en écrivant à CCI Seine-et-Marne - Direction entreprises et territoires - Service données et analyses territoriales - 1 avenue Johannes Gutenberg – Serris - CS 70045 77776 Marne-la-Vallée Cedex 4. En cas de difficulté, vous pouvez vous adresser au délégué à la protection des données de la CCI Seine-et-Marne à l'adresse cpdp@cci-paris-idf.fr en précisant que la demande concerne des données personnelles détenues par la CCI Seine-et-Marne Direction entreprises et territoire - Service DAT. En dernier lieu, vous pouvez déposer une réclamation auprès de la CNIL 3 Place de Fontenoy - TSA 80715 - 75334 PARIS CEDEX 07.
	</p>
	<p>Editeur : Ce site Internet dédié aux boutiques éphémères est un site de la Chambre de Commerce et d'Industrie de Seine-et-Marne : 1 avenue Johannes Gutenberg - Serris - CS 70045 - 77776 Marne-la-Vallée Cedex 4.
		Directeur de publication : Jean-Charles HERRENSCHMIDT, Président de la CCI Seine-et-Marne.
		Responsable du site : Alain BEAUMONT, Directeur général adjoint appui entreprises et territoires.
		Hébergement : GIE Groupe CCIR Paris-Île-de-France, 47 rue de Tocqueville 75017 Paris, N°siret : 88929960800022.
		Reproduction sur support papier : A l’exception de l’iconographie, la reproduction des pages de ce site sur un support papier est autorisée, sous réserve du respect des trois conditions suivantes :
			gratuité de la diffusion, respect de l’intégrité des documents reproduits (aucune modification, ni altération d’aucune sorte), citation explicite du site https://boutiquesephemeres.cci77.fr/ comme source et mention que les droits de reproduction sont réservés et strictement limités.
		Reproduction sur support électronique : La reproduction de tout ou partie de ce site sur un support électronique est autorisée sous réserve de l’ajout de façon claire et lisible de la source (https://boutiquesephemeres.cci77.fr/) et de la mention « Droits réservés ». Les informations utilisées ne doivent l’être qu’à des fins personnelles, associatives ou professionnelles ; toute utilisation à des fins commerciales ou publicitaires est exclue.
		Création de liens : La CCI Seine-et-Marne autorise la mise en place d’un lien hypertexte pointant vers le contenu du site https://boutiquesephemeres.cci77.fr/, sous réserve de :
			ne pas utiliser la technique du lien profond (« deep linking »), c’est-à-dire que les pages du site https://boutiquesephemeres.cci77.fr/ ne doivent pas être imbriquées à l’intérieur des pages d’un autre site, mais accessible par l’ouverture d’une fenêtre, mentionner la source qui pointera grâce à un lien hypertexte directement sur le contenu visé. Les informations utilisées ne doivent l’être qu’à des fins personnelles, associatives ou professionnelles ; toute utilisation à des fins commerciales ou publicitaires est exclue.
		Attention. Cette autorisation ne s’applique pas aux sites internet diffusant des informations à caractère polémique, pornographique, xénophobe ou pouvant, dans une large mesure porter atteinte à la sensibilité du plus grand nombre. Pour d’autres utilisations, veuillez consulter le Responsable du site.
		Crédits : Les photographies sont propriétés de la CCI Seine-et-Marne.
	</p>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
		integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
		crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
		integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
		crossorigin=""></script>
	
	<link rel="stylesheet" type="text/css" href="boutiques_fmr.css" />
	<script src="boutiques_fmr.js"></script>
</footer>