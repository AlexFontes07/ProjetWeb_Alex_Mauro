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
			<div class="contact-form">
				
				<div class="col-md-8 contact-grid">
					<form>
                        <SELECT name="type" size="1">
                            <OPTION>Vendre </OPTION>
                            <OPTION onclick="document.getElementById('chk_services').hide();">Louer</OPTION>
                            <OPTION>Proposer un service</OPTION>
                        </SELECT>


                        <SELECT id="chk_services" name="type" size="1">
                            <OPTION>Jardinage</OPTION>
                            <OPTION>Déménagement</OPTION>
                            <OPTION>Ménage</OPTION>
                            <OPTION>Garde d'enfants</OPTION>
                            <OPTION>Garde d'animaux</OPTION>
                            <OPTION>Informatique</OPTION>
                        </SELECT>


						<input type="text" value="Nom" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Nom';}">
                        <br>
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
							<p>Email:<a href="mailto:contact@cpnv.ch"> contact@cpnv.ch
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
	</div>
<!--//content-->
<?php
$contenu = ob_get_clean();
require "gabarit.php";

			