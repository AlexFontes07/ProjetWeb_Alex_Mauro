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
function openProducts($type,$page){
    $itemCounter=0;
    $itemList='<div class=\" bottom-product\">';
    $array=getItemDataBase();
    foreach($array as $item){
        if($item["Type"]==$type){
            $itemList=$itemList.'<div class=\"product-at \"><a href="index.php?action=SinglePage"><img class="img-responsive" src="images/'.$item["id_annonce"].'.jpg"><div class="pro-grid"><span class="buy-in"></span></div></a></div><p class="tun">'.$item["Titre"].'</p><a href="#" class="item_add"><p class="number item_price"><i> </i>'.$item["Prix"].' CHF</p></a>';
            $itemCounter++;
            if($itemCounter==2){
                $itemList=$itemList.'<div class="clearfix"></div></div><div class=" bottom-product">';
                $itemCounter=0;
            }
        }
        $itemList=$itemList.'</div>';
    }

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
        $_SESSION["id_utilisateur"]=$userId;
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