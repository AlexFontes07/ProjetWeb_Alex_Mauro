<?php
/**
 * Created by PhpStorm.
 * User: Mauro-Alexandre.COST
 * Date: 11.03.2019
 * Time: 08:14
 */
require "model/model.php";
function openSingle_contact(){
require "view/single_contact.php";
}
function openSingle(){
    require "view/single.php";
}
function openRegister(){
    require "view/register.php";
}
function openProducts(){
    require "view/products.php";
}
function openLogin(){
    require "view/login.php";
}
function openHome(){
    require "view/home.php";
}
function openContact(){
    require "view/contact.php";
}
function login($Donnees){
    $userId=getUserId($Donnees["Email"],$Donnees["Password"]);
    if($userId!=-1){
        $_SESSION["ID"]=$userId;
        $_SESSION["Prenom"]=getFName($userId);
        $_SESSION["Nom"]=getLName($userId);
        $_SESSION["Email"]=getEmail($userId);
        $_SESSION["Adresse"]=getAdress($userId);
        $_SESSION["NPA"]=getPCode($userId);
        require "view/home.php";
    }else{
        require "view/login.php";
    }
}
function logout(){
    session_destroy();
    require "view/home.php";
}

?>