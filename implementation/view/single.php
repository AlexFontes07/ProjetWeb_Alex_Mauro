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
        <div class="col-md-3 product-price">

            <div class=" rsidebar span_1_of_left">
                <div class="of-left">
                    <h3 class="cate">Categories</h3>
                </div>
                <ul class="menu">
                    <li class="item1"><a href="#">Men </a>
                        <ul class="cute">
                            <li class="subitem1"><a href="#">Cute Kittens </a></li>
                            <li class="subitem2"><a href="#">Strange Stuff </a></li>
                            <li class="subitem3"><a href="#">Automatic Fails </a></li>
                        </ul>
                    </li>
                    <li class="item2"><a href="#">Women </a>
                        <ul class="cute">
                            <li class="subitem1"><a href="#">Cute Kittens </a></li>
                            <li class="subitem2"><a href="#">Strange Stuff </a></li>
                            <li class="subitem3"><a href="#">Automatic Fails </a></li>
                        </ul>
                    </li>
                    <li class="item3"><a href="#">Kids</a>
                        <ul class="cute">
                            <li class="subitem1"><a href="#">Cute Kittens </a></li>
                            <li class="subitem2"><a href="#">Strange Stuff </a></li>
                            <li class="subitem3"><a href="#">Automatic Fails</a></li>
                        </ul>
                    </li>
                    <li class="item4"><a href="#">Accesories</a>
                        <ul class="cute">
                            <li class="subitem1"><a href="#">Cute Kittens </a></li>
                            <li class="subitem2"><a href="#">Strange Stuff </a></li>
                            <li class="subitem3"><a href="#">Automatic Fails</a></li>
                        </ul>
                    </li>

                    <li class="item4"><a href="#">Shoes</a>
                        <ul class="cute">
                            <li class="subitem1"><a href="#">Cute Kittens </a></li>
                            <li class="subitem2"><a href="#">Strange Stuff </a></li>
                            <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--initiate accordion-->
            <script type="text/javascript">
                $(function() {
                    var menu_ul = $('.menu > li > ul'),
                        menu_a  = $('.menu > li > a');
                    menu_ul.hide();
                    menu_a.click(function(e) {
                        e.preventDefault();
                        if(!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true,true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true,true).slideUp('normal');
                        }
                    });

                });
            </script>
            <!---->

            <div class="sellers">
                <div class="of-left-in">
                    <h3 class="tag">Tags</h3>
                </div>
                <div class="tags">
                    <ul>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>

                        <div class="clearfix"> </div>
                    </ul>

                </div>

            </div>
            <!---->
        </div>
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
                        <li><span>ID</span>
                            <span class="women1"><?php echo $array[$id]["id_annonce"];?></span></li>
                    </ul>
                    <a href="index.php?action=SingleContactPage&id=<?php echo $array[$id]["id_annonce"];?>" class="add-cart item_add">Contacter</a>

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
