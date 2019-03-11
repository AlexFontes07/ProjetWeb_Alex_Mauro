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
<div class=" container">
<div class=" register">
	<h1>Inscription</h1>
		  	  <form> 
				 <div class="col-md-6 register-top-grid">
					<h3>Information personnelle</h3>
					 <div>
						<span>Prénom</span>
						<input type="text"> 
					 </div>
					 <div>
						<span>Nom</span>
						<input type="text"> 
					 </div>
					 <div>
						 <span>E-mail</span>
						 <input type="text">
					 </div>
                     <br>
                 </div>
                  <div class="col-md-6 register-bottom-grid">
                        <h3>Information de login</h3>
                         <div>
                            <span>Mot de passe</span>
                            <input type="password">
                         </div>
                         <div>
                            <span>Confirmation du mot de passe</span>
                            <input type="password">
                         </div>
                         <input type="submit" value="Envoyer">
							
                  </div>
					 <div class="clearfix"> </div>
				</form>
			</div>
</div>
<!--//content-->
<?php
$contenu = ob_get_clean();
require "gabarit.php";
