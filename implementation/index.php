<?php
session_start();
require 'controler/controler.php';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    //switch avec tous les cas possibles dans le site
    switch ($action) {
        case "loginPage":
            openLogin();
            break;
        case "RegisterPage":
            openRegister();
            break;
        case "listServices":
            if(!isset($_GET["page"])){
                $_GET["page"]=1;
            }
            openProducts(3,$_GET['page']);
            break;
        case "listItemsA":
            if(!isset($_GET["page"])){
                $_GET["page"]=1;
            }
            openProducts(1,$_GET['page']);
            break;
        case "listItemsL":
            if(!isset($_GET["page"])){
                $_GET["page"]=1;
            }
            openProducts(2,$_GET['page']);
            break;
        case "ContactPage":
            openContact();
            break;
        case "SinglePage":
            if(isset($_GET["id"])){
                openSingle($_GET["id"]);
            }else{
                openHome();
            }

            break;
        case "SingleContactPage":
            if(isset($_GET["id"])){
                openSingle_contact($_GET["id"]);
            }else{
                openHome();
            }
            break;
        case "LoginAction":
            if(isset($_POST["Password"])){
                login($_POST);
            }else{
                openLogin();
            }
            break;
        case "RegisterAction":
            if(isset($_POST["Password1"])){
                register($_POST);
            }else{
                openRegister();
            }
            break;
        case "Logout":
            logout();
            break;
        case "annonces":
            showAnnonces();
            break;
        case "new_annonce":
            require "view/new_annonce.php";
            break;
        case "update":
            if(isset($_POST)){
                updateArticle($_GET["id"],$_POST);
            }else{
                showAnnonces();
            }

            break;
        case"addItem":
            if(isset($_POST["type"])){
                addItem($_POST);
            }else{
                require"view/new_annonce.php";
            }

            break;
        case"sendmail":
            if(isset($_POST['message'])){
                if(!isset($_GET["id"])){
                    $_GET["id"]=0;
                }
                sendMail($_POST,$_GET["id"]);
            }else{
                if(!isset($_GET["id"])){
                    openContact();
                }else{
                    openSingle_contact($_GET["id"]);
                }
            }
            break;

        default :
            openHome();
            break;
    }
} else {
    openHome();
}
?>