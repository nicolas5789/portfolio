<?php ob_start(); ?>

	<div id="hello_part">
		<div class="container">
			<div id="description" class="row">
				<div class="col-md-6">
					<p id="description_job">Web <span>Development</span></p>
					<p id="description_name"><span>Nicolas </span>Chaperon</p>
					<a href="#ancre_skills"><button type="button" class="btn btn-danger">Découvrir</button></a>
				</div>
			</div>

			<div id="introduction" class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6">
					<p>Avoir un besoin, une envie, se lancer.<br>
					Définir les critères, les choix, trancher.<br>
					Dessiner, coder, optimiser, mettre en ligne.<br>
					Partager, communiquer, grandir, évoluer : <br>
					<span>Développer</span></p>
				</div>
			</div>
		</div>
	</div>	
	

	<div id="ancre_skills"> </div>

	<section id="skills">
		<h1>Skills</h1>
		<div class="container">
			<div class="row">
				<div id="codes" class="col-md-6">
					<div id="codes1">
						<div class="languages">
							<img id="logo_html" src="public/images/html.png" alt="logo_html">
						</div>
						<div class="languages">
							<img id="logo_js" src="public/images/js.png" alt="logo_js">
						</div>
						<div class="languages">
							<img id="logo_php" src="public/images/php.png" alt="logo_php">
						</div>
					</div>
					<div id="codes2">
						<div class="languages">
							<img id="logo_css" src="public/images/css.png" alt="logo_php">
						</div>
						<div class="languages">
							<img id="logo_sql" src="public/images/sql.png" alt="logo_sql">
						</div>
						<div class="languages">
							<img id="logo_w3c" src="public/images/w3c.png" alt="logo_w3c">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div id="photo_container">
						<img src="public/images/photo_nc.png" alt="portrait">
					</div>
					<p>
						Hello World : Ces deux mots furent le début de l'aventure, aujourd'hui diplômé en développement et en intégration web, j'utilise mes connaissances pour réaliser des sites et des applications web. <br>
						Intégration de design, développement front-end, développement back-end, intégration e-mailing...<br>
					</p>
				</div>
			</div>
		</div>
	</section>

	<div id="ancre_works"> </div>

	<section id="works">
		<h1>Works</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-12"><h3>Webagency</h3></div>
				<div class="col-md-4">
					<a href="http://www.sailtheweb.com" onclick="window.open(this.href); return false;"><img src="public/images/webagency.png" alt="capture_webagency"></a>
				</div>
				<div class="col-md-8">
					<p>Webagency : Intégration responsive d'un design prédéfini pour une agence web. <br>
					Mise en place d'un code "pixel perfect".<br> 
					<a href="https://github.com/nicolas5789/Webagency/tree/master/Projet1" onclick="window.open(this.href); return false;">Voir le code</a><br>
					HTML5 / CSS3 / W3C</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12"><h3>Ot-Strasbourg</h3></div>
				<div class="col-md-8">
					<p>Ot-strasbourg : Réalisation d'un support web personnalisée pour l'office du tourisme de Strasbourg via le CMS WordPress. Module de SEO simplifié pour l'utilisateur. Intégration d'un module de réservation back et front.<br> 
					Design full responsive.<br> 
					WordPress / W3C / SEO</p> 
				</div>
				<div class="col-md-4">
					<a href="http://www.ot-strasbourg.sailtheweb.com" onclick="window.open(this.href); return false;"><img src="public/images/ot-strasbourg.png" alt="capture_ot-strasbourg"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12"><h3>Les aventures de Jean</h3></div>
				<div class="col-md-4">
					<a href="http://www.lesaventuresdejean.sailtheweb.com" onclick="window.open(this.href); return false;"><img src="public/images/blog_jean.png" alt="capture_lesaventuresdejean"></a>
				</div>
				<div class="col-md-8">
					<p>Les aventures de Jean : Création d'un blog fictif pour le compte d'un reporter.<br> 
					Mise en place d'une administration sécurisée et sans codage pour l'utilisateur via un WYSIWYG. <br> 
					<a href="https://github.com/nicolas5789/Les-aventures-de-Jean" onclick="window.open(this.href); return false;">Voir le code</a><br> 
					HTML / CSS / Javascript / PHP</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12"><h3>Le coin des nounous</h3></div>
				<div class="col-md-8">
					<p>Le coin des nounous : Concrétisation d'une idée d'application web utile aux jeunes parents dans leurs recherches de solutions de garde par département. Mise en relation des parents et des nounous en fonction des critères, du secteur et des avis partagés. <br>
					<span style="font-style: italic;">Visuel temporaire, design en cours de réalisation.</span> <br>
					<a href="https://github.com/nicolas5789/Le-coin-des-nounous" onclick="window.open(this.href); return false;">Voir le code</a><br>
					HTML / CSS / Javascript / PHP
				</p>
				</div>
				<div class="col-md-4">
					<a href="http://www.lecoindesnounous.sailtheweb.com" onclick="window.open(this.href); return false;"><img src="public/images/le_coin_des_nounous.png" alt="capture_lecoindesnounous"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12"><h3>iNav</h3></div>
				<div class="col-md-4">
					<img src="public/images/iNav.png" alt="capture_inav">
				</div>
				<div class="col-md-8">
					<p>iNav : Outils d'aide à l'exploitation opérationnelle d'une flotte fluviale, autant côté management que navigation.<br> <span style="font-style: italic;">Projet en cours de prototypage.</span> <br>
					HTML CSS JS PHP</p>
				</div>
			</div>

		</div>
	</section>

	<div id="ancre_contact"> </div>

	<section id="contact">
		<h1>Contact</h1>
		<div class="row">
			<div class="col-md-6">
				<form action="index.php?action=mail" method="POST">
					<table>
						<tr>
							<td><input class="form-control" type="text" name="name" placeholder="Votre nom"></td>
						</tr>
						<tr>
							<td><input class="form-control" type="email" name="mail" placeholder="Votre adresse email"></td>
						</tr>
						<tr>
							<td><textarea class="form-control" name="message" placeholder="Tapez votre message ici"></textarea></td>
						</tr>
						<tr>
							<td><input class="form-control" type="submit"></td>
						</tr>
						<?php if(isset($_SESSION["mail_alert"])) { ?>
						<tr>
							<td><p class="important"><?= $_SESSION["mail_alert"] ?></p></td>
						</tr>	
						<?php } ?>
					</table>
				</form>
			</div>
			<div id="ending_message" class="col-md-6">
				<p>Pour m'envoyer un message, remplissez le formulaire ou alors contacter moi directement par mail : </p>
				<p class="important">nicolas5789@gmail.com</p>
				<p>Vous pouvez également découvrir une partie de mes codes, mon profil LinkedIn ou télécharger mon CV juste en dessous.<br>
				A bientôt !</p>
				<div id="media">
					<a href="https://www.linkedin.com/in/nicolas-chaperon-8670b3a8/" onclick="window.open(this.href); return false;"><img id="linkedin" src="public/images/LinkedIn.png" alt="logo-linkedIn"></a>
					<a href="https://github.com/nicolas5789" onclick="window.open(this.href); return false;"><img id="github" src="public/images/GitHub.png" alt="logo_github"></a>
					<a href="../public/CV-Nicolas_Chaperon.pdf" onclick="window.open(this.href); return false;"><img id="logo-cv" src="public/images/logo-cv.png" alt="logo-cv"></a>
				</div>

			</div>
		</div>
	</section>

<?php $content = ob_get_clean(); ?>

<?php require("views/template.php"); ?>