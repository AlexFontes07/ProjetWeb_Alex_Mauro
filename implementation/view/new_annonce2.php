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
<script type="text/javascript">
    function change()
    {
        var value = document.getElementById('type').value;
        if(value == 'proposerService')
        {
            document.getElementById('add').style.display = 'block';
        }
        else
        {
            document.getElementById('add').style.display = 'none';
        }
    }
</script>
<div class="contact">
			
			<div class="container">
			<div class="contact-form">
				
				<div class="col-md-8 contact-grid">
					<form>
                        <SELECT name="type" id="type" onchange="change();" size="1">
                            <OPTION value="vendre">Vendre </OPTION>
                            <OPTION value="louer">Louer</OPTION>
                            <OPTION value="proposerService">Proposer un service</OPTION>
                        </SELECT>


                        <SELECT id="add" name="add" style="display:none" size="1">
                            <OPTION value="jardinage">Jardinage</OPTION>
                            <OPTION value="demenagement">Déménagement</OPTION>
                            <OPTION value="menage">Ménage</OPTION>
                            <OPTION value="gardeChien">Garde de chien</OPTION>
                            <OPTION value="gardeChat">Garde de chat</OPTION>
                            <OPTION value="informatique">Informatique</OPTION>
                        </SELECT>


						<input type="text" value="<?php echo $_SESSION["Nom"]. " " .$_SESSION["Prenom"];?>" disabled>
                        <br>
						<div class="send">
							<input type="submit" value="Ajouter">
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

			