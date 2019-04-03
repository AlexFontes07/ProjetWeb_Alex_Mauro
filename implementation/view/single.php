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
$titre="Objet";
?>

<!--content-->
<!---->
<div class="product">
    <div class="container">
         <!---->

        <div class="col-md-9 product-price1">
            <div class="col-md-5 single-top">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="images/annonces/<?php if($array[$id]["Type"]!=3){echo $array[$id]["id_annonce"];}else{echo $array[$id]["Titre"];};?>.jpg">
                            <img src="images/annonces/<?php if($array[$id]["Type"]!=3){echo $array[$id]["id_annonce"];}else{echo $array[$id]["Titre"];};?>.jpg" />
                        </li>
                    </ul>
                </div>
                <!-- FlexSlider -->
                <script defer src="js/jquery.flexslider.js"></script>
                <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

                <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function() {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });
                    // Can also be used with $(document).ready()
                    $(window).load(function() {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });
                </script>
            </div>
            <div class="col-md-7 single-top-in simpleCart_shelfItem">
                <div class="single-para ">
                        <h4><?php echo $array[$id]["Titre"];?></h4>
                        <div class="star-on">
                        <div class="clearfix"> </div>
                        </div>
                        <h5 class="item_price"><?php echo $array[$id]["Prix"];?> CHF</h5>
                    <p><?php echo $array[$id]["Description"];?></p>
                    <ul class="tag-men">
                        <?php if($array[$id]["Type"]!=3) :?>
                        <li><span>ID</span>
                            <span class="women1"><?php echo $array[$id]["id_annonce"];?></span></li>
                    </ul>
                    <a href="index.php?action=SingleContactPage&id=<?php echo $array[$id]["id_annonce"];?>" class="add-cart item_add">Contacter</a>
                        <?php else :?>
                        <h3>offres disponibles</h3>
                        <?php echo $avalableServices?>
                    </ul>

                        <?php endif; ?>

                </div>
            </div>
            <div class="clearfix"> </div>
            <!---->
        </div>

    </div>
</div>
<!--//content-->
<?php
$contenu = ob_get_clean();
require "gabarit.php";
