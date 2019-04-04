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
<!---->
		<div class="product">
			<div class="container">
                <div class="col-md-3 product-price">
                    <div class=" rsidebar span_1_of_left">
                        <ul class="menu">
                        </ul>
                    </div>
                </div>
				<div class="col-md-12 product1">
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

<!--//content-->
<?php
$contenu = ob_get_clean();
require "gabarit.php";
			