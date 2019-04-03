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

            document.getElementById('affName').style.display = 'none';
            document.getElementById('affPrix').style.display = 'none';
            document.getElementById('fileToUpload').style.display = 'none';
            document.getElementById('affDesc').style.display = 'none';
            document.getElementById('add').style.display = 'block';

            document.getElementById('affName').required = false;
            document.getElementById('affPrix').required = false;
            document.getElementById('fileToUpload').required = false;
            document.getElementById('affDesc').required = false;
            document.getElementById('add').required = true;

            document.getElementById('affNamelbl').style.display = 'none';
            document.getElementById('affPrixlbl').style.display = 'none';
            document.getElementById('fileToUploadlbl').style.display = 'none';
            document.getElementById('affDesclbl').style.display = 'none';
            document.getElementById('addlbl').style.display = 'block';
        }
        else
        {

            document.getElementById('affNamelbl').style.display = 'block';
            document.getElementById('affPrixlbl').style.display = 'block';
            document.getElementById('fileToUploadlbl').style.display = 'block';
            document.getElementById('affDesclbl').style.display = 'block';
            document.getElementById('addlbl').style.display = 'none';

            document.getElementById('affName').style.display = 'block';
            document.getElementById('affPrix').style.display = 'block';
            document.getElementById('fileToUpload').style.display = 'block';
            document.getElementById('affDesc').style.display = 'block';
            document.getElementById('add').style.display = 'none';

            document.getElementById('affName').required = true;
            document.getElementById('affPrix').required = true;
            document.getElementById('fileToUpload').required = true;
            document.getElementById('affDesc').required = true;
            document.getElementById('add').required = false;
        }
    }
</script>
<div class="contact">
			
			<div class="container">
			<div class="contact-form">
				
				<div class="col-md-8 contact-grid">
					<form action="index.php?action=addItem" method="POST" enctype="multipart/form-data">
                        <label id="typelbl" for="type">Type d'annonce que vous proposez</label><br>
                        <SELECT name="type" id="type" onchange="change();" size="1">
                            <OPTION value="vendre">Vendre </OPTION>
                            <OPTION value="louer">Louer</OPTION>
                            <OPTION value="proposerService">Proposer un service</OPTION>
                        </SELECT><br><br>
                        <label id="addlbl" style="display:none" for="add">Service que vous voulez proposer</label>
                        <SELECT id="add" name="add" style="display:none" size="1">
                            <OPTION value="1">Jardinage</OPTION>
                            <OPTION value="2">Aide au Déménagement</OPTION>
                            <OPTION value="3">Garde d'enfants</OPTION>
                            <OPTION value="4">Garde de chien</OPTION>
                            <OPTION value="5">Garde de chat</OPTION>
                            <OPTION value="6">Lavage de voiture</OPTION>
                            <OPTION value="7">Nettoyage de PC</OPTION>
                            <OPTION value="8">Tondre la pelouse</OPTION>
                            <OPTION value="9">Repassage</OPTION>
                            <OPTION value="10">Lavage de vitres</OPTION>
                        </SELECT>
                        <br>
                        <label id="vendNamelbl" for="vendName">Votre Nom</label>
                        <input type="text" id="vendName" name="sellerName" style="display:block" value="<?php echo $_SESSION["Nom"].' '.$_SESSION["Prenom"] ?>" disabled>
                        <label id="affNamelbl" for="affName">Nom du Produit</label>
                        <input type="text" id="affName" name="Name" style="display:block" required>
                        <label id="affPrixlbl" for="affPrix">Prix du Produit</label>
                        <input type="number" id="affPrix" name="Prix" style="display:block" required>
                        <label id="affDesclbl" for="affDesc">Description du produit</label>
                        <textarea cols="77" id="affDesc" name="Desc" style="display:block" rows="6" required> </textarea>
                        <label id="fileToUploadlbl" for="fileToUpload">Image du produit</label>
                        <input type="file" id="fileToUpload" name="Upload" style="display:block" required>
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
</div>
<!--//content-->
<?php
$contenu = ob_get_clean();
require "gabarit.php";

			