<?php
if(!isset($_SESSION)){
    session_start();
}
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
        case "ProductsPage":
            openProducts();
            break;
        case "ContactPage":
            openContact();
            break;
        case "SinglePage":
            openSingle();
            break;
        case "SingleContactPage":
            openSingle_contact();
            break;
        case "LoginAction";
            login($_POST);
            break;
        default :
            openHome();
            break;
    }
} else {
    openHome();
}
?>