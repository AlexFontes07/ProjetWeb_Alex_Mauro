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
<div class=" container">
<div class=" register">
	<h1>Inscription</h1>
		  	  <form method="Post" name="formRegister" action="index.php?action=RegisterAction">
				 <div class="col-md-6 register-top-grid">
					<h3>Information personnelle</h3>
					 <div>
						<span>Prénom</span>
						<input name="Prenom" type="text" required>
					 </div>
					 <div>
						<span>Nom</span>
						<input name="Nom" type="text" required>
					 </div>
                     <div>
                         <span>Adresse</span>
                         <input name="Adresse" type="text" required>
                         <span>NPA</span>
                         <input name="NPA" type="text" required>
                     </div>
                     <br>
                 </div>
                  <div class="col-md-6 register-bottom-grid">
                        <h3>Information de login</h3>
                      <div>
                          <span>E-mail</span>
                          <input name="Email" type="email" required>
                      </div>
                         <div>
                            <span>Mot de passe</span>
                            <input name="password1" type="password" required>
                         </div>
                         <div>
                            <span>Confirmation du mot de passe</span>
                            <input name="password2" type="password" required>
                         </div>
                      <div class="clearfix"> </div>
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
