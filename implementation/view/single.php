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
            <div class="product-middle">

                <div class="fit-top">
                    <h6 class="shop-top">Lorem Ipsum</h6>
                    <a href="#" class="shop-now">SHOP NOW</a>
                    <div class="clearfix"> </div>
                </div>
            </div>
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
            <div class="product-bottom">
                <div class="of-left-in">
                    <h3 class="best">Best Sellers</h3>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="#"><img class="img-responsive " src="images/p1.jpg" alt=""></a>

                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="#" >Lorem ipsum dolor sit
                                amet consectetuer  </a></h6>

                        <span class=" price-in1"> $40.00</span>
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="#"><img class="img-responsive " src="images/p2.jpg" alt=""></a>

                    </div>
                    <div class="fashion-grid1">
                        <h6 class="best2"><a href="#" >Lorem ipsum dolor sit
                                amet consectetuer </a></h6>

                        <span class=" price-in1"> $40.00</span>
                    </div>

                    <div class="clearfix"> </div>
                </div>

            </div>
            <div class=" per1">
                <a href="#" ><img class="img-responsive" src="images/<?php echo $array[$id]["Titre"];?>.jpg" alt="">
                    <div class="six1">
                        <h4>DISCOUNT</h4>
                        <p>Up to</p>
                        <span>60%</span>
                    </div></a>
            </div>
        </div>
        <div class="col-md-9 product-price1">
            <div class="col-md-5 single-top">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="images/annonces/<?php echo $array[$id]["id_annonce"];?>.jpg">
                            <img src="images/annonces/<?php echo $array[$id]["id_annonce"];?>.jpg" />
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
