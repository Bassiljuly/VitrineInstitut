
<?php include('header.php') ?>


	<main class="pageform">


		<section class="formulaire">
			<h2>Formulaire de contact</h2>
			<form id="contact" method="post" action="../php/contactv2.php">
				<fieldset><legend>Vos coordonnées</legend>
					<p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" /></p>
					<p><label for="email">Email :</label><input type="text" id="email" name="email" /></p>
				</fieldset>

				<fieldset><legend>Votre message :</legend>
					<p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" /></p>
					<p><label for="message">Message :</label><textarea id="message" name="message" cols="30" rows="8"></textarea></p>
				</fieldset>

		<input type="submit" class="submit"  name="envoi" value="Envoyer" />
			</form>
		</section>

		<section class="map">
					<div class="iframe">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.24368528292!2d2.3967122156400156!3d48.85356340900065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67277be9d829b%3A0x910b933fcc23a15b!2s20%20Rue%20des%20Vignoles%2C%2075020%20Paris!5e0!3m2!1sfr!2sfr!4v1603064815581!5m2!1sfr!2sfr"
					 width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
		</section>

	</main>

<?php include('footer.php') ?>
