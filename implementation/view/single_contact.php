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

<div class="contact">

    <div class="container">
        <h1>Contact</h1>
        <div class="contact-form">

            <div class="col-md-8 contact-grid">
                <form action="index.php?action=sendmail&id=<?php echo $array[$id]["id_annonce"];?>" method="post">
                    <input type="text" value="<?php echo $venteur;?>" disabled>

                    <input type="text" value="<?php echo $email;?>" disabled>

                    <textarea cols="77" rows="6" value=" " name="message" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                    <div class="send">
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
            <div class="col-md-4 left-account ">
                <a href="index.php?action=SinglePage&id=<?php echo $id+1 ?>"><img class="img-responsive " src="images/annonces/<?php if($array[$id]["Type"]!=3){echo $array[$id]["id_annonce"];}else{echo $array[$id]["Titre"];};?>.jpg" alt=""></a>
                <br>
                <h5 class="item_price"><?php echo $array[$id]["Prix"];?> CHF</h5>
                <p><?php echo $array[$id]["Description"];?></p>
            </div>
            <div class="clearfix"> </div>
            </div>
        </div>

    </div>
<!--//content-->
<?php
$contenu = ob_get_clean();
require "gabarit.php";
			