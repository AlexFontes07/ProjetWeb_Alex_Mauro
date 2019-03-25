<?php
session_start();
require 'controler/controler.php';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
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
            openSingle($_GET["id"]);
            break;
        case "SingleContactPage":
            openSingle_contact($_GET["id"]);
            break;
        case "LoginAction";
            login($_POST);
            break;
        case "RegisterAction";
            register($_POST);
            break;
        case "Logout";
            logout();
            break;
        case "new_annonce";
            require "view/new_annonce.php";
            break;
        default :
            openHome();
            break;
    }
} else {
    openHome();
}
?>