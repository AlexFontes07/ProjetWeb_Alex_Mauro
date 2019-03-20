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
function openSingle($id){
    $array=getItemDataBase();

    require "view/single.php";
}
function openRegister(){

    require "view/register.php";
}
function openProducts($type,$page){
    $collCounter=0;
    $itemCounter=0;
    $itemList='<div class="bottom-product">';
    $array=getItemDataBase();
    foreach($array as $item){
        if($item["Type"]==$type) {
            $itemCounter++;
            if ($itemCounter <= 9 + ($page - 1) * 9 & $itemCounter >= ($page - 1) * 9) {
                $itemList = $itemList . '<div class="col-md-4 bottom-cd simpleCart_shelfItem">
                                            <div class="product-at">
                                                <a href="index.php?action=SinglePage">
                                                    <img class="img-responsive" src="images/annonces/' . $item["id_annonce"] . '.jpg">
                                                    <div class="pro-grid"><span class="buy-in"></span></div>
                                                 </a>
                                             </div><p class="tun">' . $item["Titre"] . '</p>
                                             <a href="#" class="item_add"><p class="number item_price"><i> </i>' . $item["Prix"] . ' CHF</p></a>
                                          </div>';
                $collCounter++;

                if ($collCounter == 3) {
                    $itemList = $itemList . '<div class="clearfix"></div>';
                    if ($itemCounter != 9) {
                        $itemList = $itemList . '</div><div class=" bottom-product">';
                    }
                    $collCounter = 0;
                }
            }
        }
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