<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */
// tampon de flux stocké en mémoire
ob_start();
$titre="RentASnow - Accueil";
?>
<!--content-->
<div class="contact">
			
			<div class="container">
				<h1>Contact</h1>
			<div class="contact-form">
				
				<div class="col-md-8 contact-grid">
					<form>	
						<input type="text" value="<?php echo $_SESSION["Nom"]. " " .$_SESSION["Prenom"];?>" disabled>
					
						<input type="text" value="<?php echo $_SESSION["Email"];?>" disabled>
						<input type="text" value="Sujet" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Sujet';}">
						
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
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

			