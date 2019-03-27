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
<div class="container">
    <div class="account">
        <h1>Account</h1>
        <div class="account-pass">
            <div class="col-md-8 account-top">
                <form action="index.php?action=LoginAction" id="Login" method="Post" name="formRegister">

                    <div>
                        <span>Email</span>
                        <input name="Email" type="text">
                    </div>
                    <div>
                        <span >Password</span>
                        <input name="Password" type="password">
                    </div>
                    <div class="clearfix"> </div>
                    <input type="submit" value="Login">
                    <a href="index.php?action=RegisterPage"><input type="button" value="S'inscrire"></a>
                </form>
            </div>
            <div class="col-md-4 left-account ">
                <a href="single.html"><img class="img-responsive " src="images/s1.jpg" alt=""></a>
                <div class="five">
                    <h2>25% </h2><span>discount</span>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</div>


<!--//content-->
<?php
$contenu = ob_get_clean();
require "gabarit.php";
			