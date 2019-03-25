<html>
<head>
    <title>BuyHard</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
    <!-- start menu -->
    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/memenu.js"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="search">
                <form>
                    <input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="Go">
                </form>
            </div>
            <div class="header-left">
                <ul>
                    <?php if(!isset($_SESSION["Email"])){
                        echo"<li ><a class=\"lock\"  href=\"index.php?action=loginPage\">Login</a></li>
                    <li><a class=\"lock\" href=\"index.php?action=RegisterPage\"  >Créer un compte</a></li>";
                    }else{
                        echo"<li ><a class=\"lock\"  href=\"index.php?action=Logout\">Logout</a></li>";
                    }
                    ?>
                    <li>
                    </li>

                </ul>

                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="container">
        <div class="head-top">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt=""></a>
            </div>
            <div class=" h_menu4">
                <ul class="memenu skyblue">
                    <li><a class="color1" href="index.php?action=listItemsA">Acheter</a>
                        <!--
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Acheter</a></h4>


                                        <ul>
                                            <li><a href="index.php?action=ProductsPage">Accesoires</a></li>
                                            <li><a href="index.php?action=ProductsPage">Arts</a></li>
                                            <li><a href="index.php?action=ProductsPage">Audio, TV, vidéo</a></li>
                                            <li><a href="index.php?action=ProductsPage">Bricolage</a></li>
                                            <li><a href="index.php?action=ProductsPage">Film & DVD</a></li>
                                            <li><a href="index.php?action=ProductsPage">Montres & Bijoux</a></li>
                                            <li><a href="index.php?action=ProductsPage">Ordinateurs & Réseaux</a></li>
                                            <li><a href="index.php?action=ProductsPage">Sport</a></li>
                                            <li><a href="index.php?action=ProductsPage">Téléphones</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                         -->
                    </li>
                    <li><a class="color1" href="index.php?action=listItemsL">Louer</a>
                        <!--
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Louer</h4>

                                        <ul>
                                            <li><a href="index.php?action=ProductsPage">Immobilier</a></li>
                                            <li><a href="index.php?action=ProductsPage">Accesoires</a></li>
                                            <li><a href="index.php?action=ProductsPage">Arts</a></li>
                                            <li><a href="index.php?action=ProductsPage">Audio, TV, vidéo</a></li>
                                            <li><a href="index.php?action=ProductsPage">Film & DVD</a></li>
                                            <li><a href="index.php?action=ProductsPage">Montres & Bijoux</a></li>
                                            <li><a href="index.php?action=ProductsPage">Réseaux</a></li>
                                            <li><a href="index.php?action=ProductsPage">Sport</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                    </li>
                    <li class="grid"><a class="color1" href="index.php?action=listServices">Services</a>
                        <!--
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Bricolage</h4>
                                        <ul>
                                            <li><a href="index.php?action=ProductsPage">Aménagement</a></li>
                                            <li><a href="index.php?action=ProductsPage">Electricité</a></li>
                                            <li><a href="index.php?action=ProductsPage">Rénovation</a></li>
                                            <li><a href="index.php?action=ProductsPage">Plomberie</a></li>
                                            <br><h4>Jardinage</h4>
                                            <li><a href="index.php?action=ProductsPage">Tondre la pelouse</a></li>
                                            <li><a href="index.php?action=ProductsPage">Taille de haie</a></li>
                                            <li><a href="index.php?action=ProductsPage">Débroussailage</a></li>
                                            <li><a href="index.php?action=ProductsPage">Autre job</a></li>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Informatique</h4>
                                        <ul>
                                            <li><a href="index.php?action=ProductsPage">Nettoyer mon PC</a></li>
                                            <li><a href="index.php?action=ProductsPage">Cours d'informatique</a></li>
                                            <li><a href="index.php?action=ProductsPage">Installer une box</a></li>
                                            <li><a href="index.php?action=ProductsPage">Autre job</a></li>
                                            <br><h4>Ménage</h4>
                                            <li><a href="index.php?action=ProductsPage">Repassage</a></li>
                                            <li><a href="index.php?action=ProductsPage">Lavage auto</a></li>
                                            <li><a href="index.php?action=ProductsPage">Nettoyage</a></li>
                                            <li><a href="index.php?action=ProductsPage">Autre job</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Animaux</h4>
                                        <ul>
                                            <li><a href="index.php?action=ProductsPage">Garde de chien</a></li>
                                            <li><a href="index.php?action=ProductsPage">Garde de chat</a></li>
                                            <li><a href="index.php?action=ProductsPage">Promener son chien</a></li>
                                            <li><a href="index.php?action=ProductsPage">Autre animaux</a></li>
                                            <br><h4>Déménagement</h4>
                                            <li><a href="index.php?action=ProductsPage">Aide au déménagement</a></li>
                                            <li><a href="index.php?action=ProductsPage">Déplacer des meubles</a></li>
                                            <li><a href="index.php?action=ProductsPage">Autre job</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    -->
                    </li>
                    <li><a class="color1" href="index.php?action=new_annonce">Nouvelle annonce</a></li>
                    <li><a class="color1" href="index.php?action=ContactPage">Nous Contacter</a></li>
                </ul>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>

</div>
<!--__________CONTENU__________-->

<?=$contenu; ?>

<!--________FIN CONTENU________-->

<div class="footer">
    <div class="container">
        <div class="footer-top-at">
            <div class="col-md-4 amet-sed ">
            </div>
            <div class="col-md-4 amet-sed" align="center">
                <h4>Contactez nous</h4>

                <p>Avenue de la gare 14</p>
                <p>1450 Sainte-Croix</p>
                <p>Tél:  +12 34 995 0792</p>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-class">
        <p >© 2019 New store All Rights Reserved | Design by  <a href="https://w3layouts.com/new-store-a-flat-ecommerce-bootstrap-responsive-web-template/" target="_blank">BuyHard</a> </p>
    </div>
</div>
</body>
</html>