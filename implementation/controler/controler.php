<?php
/**
 * Created by PhpStorm.
 * User: Mauro-Alexandre.COST
 * Date: 11.03.2019
 * Time: 08:14
 */
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
    require "model/model.php";
    if(validLogin()){

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