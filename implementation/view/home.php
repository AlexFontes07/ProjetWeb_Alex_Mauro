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
?><!--content-->
<div class="banner">
    <div class="container">
        <script src="js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider">
                <li>

                    <div class="banner-text">
                        <h3>Lorem Ipsum is not simply dummy  </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
                        <a href="index.php?action=SinglePage">Learn More</a>
                    </div>

                </li>
                <li>

                    <div class="banner-text">
                        <h3>There are many variations </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
                        <a href="index.php?action=SinglePage">Learn More</a>

                    </div>

                </li>
                <li>
                    <div class="banner-text">
                        <h3>Sed ut perspiciatis unde omnis</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
                        <a href="index.php?action=SinglePage">Learn More</a>

                    </div>

                </li>
            </ul>
        </div>

    </div>
</div>
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>NOS CATÉGORIES</h1>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="index.php?action=listItemsA" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/pi.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Acheter</span>
									</h3>
								</div>
				</a>
		

			<p><a href="index.php?action=listItemsA">Acheter</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="index.php?action=listItemsL" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/pi1.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Louer</span>
									</h3>
								</div>
				</a>
			<p><a href="index.php?action=listItemsL">Louer</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="index.php?action=listServices" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/pi2.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Services</span>
									</h3>
								</div>
				</a>
			<p><a href="index.php?action=listServices">Services Proposés</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
	</div>
	<!----->
</div>
<?php
$contenu = ob_get_clean();
require "gabarit.php";

			