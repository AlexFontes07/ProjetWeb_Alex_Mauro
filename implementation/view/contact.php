<?php
/**
 * Created by PhpStorm.
 * User: Alexandre Fontes
 * Date: 20.03.2019
 * Time: 09:16
 */
// tampon de flux stocké en mémoire
ob_start();
$titre="Accueil";
?>
<!--content-->
<div class="contact">
			
			<div class="container">
				<h1>Contact</h1>
			<div class="contact-form">
				<div class="col-md-8 contact-grid">
					<form method="post" action="index.php?action=sendmail">
						<input type="text" name="info" value="<?php echo $_SESSION["Nom"]. " " .$_SESSION["Prenom"];?>" disabled>
						<input type="text" name="email" value="<?php echo $_SESSION["Email"];?>" disabled>
						<input type="text" name="sujet" value="Sujet" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Sujet';}" required>
						<textarea cols="77" rows="6" name="message" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}" required>Message</textarea>
						<div class="send">
							<input type="submit" value="Envoyer">
						</div>
					</form>
				</div>

				<div class="col-md-4 contact-in">
						<div class="address-more">
						<h4>Adresse</h4>
							<p>BuyHard,</p>
							<p>Avenue de la gare 14,</p>
							<p>1450 Sainte-Croix. </p>
						</div>
						<div class="address-more">
						<h4>Informations</h4>
							<p>Tel: 078/999.99.99</p>
							<p>Email: contact@cpnv.ch
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--//content-->
<?php
$contenu = ob_get_clean();
require "gabarit.php";

			