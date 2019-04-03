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
<!---->
		<div class="content">
			<div class="container">
				<div class="col-md-9 product1">
		           <?php print $itemList?>
				</div>
		<div class="clearfix"> </div>
		<nav class="in">
				  <ul class="pagination">
                      <?php print $bottombuttons?>
				  </ul>
				</nav>
            </div>
        </div>
</div>
			
				<!---->

<!--//content-->
<?php
$contenu = ob_get_clean();
require "gabarit.php";
			