<?php
/**
 * Created by PhpStorm.
 * User: Mauro-Alexandre.COST
 * Date: 11.03.2019
 * Time: 08:14
 */

require "model/model.php";
function openSingle_contact($id){
    $array=getItemDataBase();
    $email=getEmail($array[$id]["id_utilisateur"]);
    $id-=1;
    require "view/single_contact.php";
}

function openSingle($id){
    $array=getItemDataBase();
    $id-=1;
    $avalableServices="";
    foreach($array as $item){
        if($item["Type"]==3){
            if($item["Titre"]==$array[$id]["Titre"]){
                $avalableServices=$avalableServices.'<li><span><a href="index.php?action=SingleContactPage&id='.$array[$id]["id_annonce"].'" class="add-cart item_add">Contacter</a></span>';
                $avalableServices=$avalableServices.'<span class="women1">'.getFName($item["id_utilisateur"]).' '.getLName($item["id_utilisateur"]) .'</span></li> ';
            }
        }
    }
    require "view/single.php";
}
function openRegister(){

    require "view/register.php";
}
function openProducts($type,$page){
    $ShowingServices = array();
    $collCounter=0;
    $itemCounter=0;
    $itemList='<div class="bottom-product">';
    $array=getItemDataBase();
    switch($type){
        case 1:
            $typeText="listItemsA";
            break;
        case 2:
            $typeText="listItemsL";
            break;
        case 3:
            $typeText="listServices";
            break;
    }
    foreach($array as $item){
        if($item["Type"]==$type) {
            if($type!=3) {
                $itemCounter++;
                if ($itemCounter <= 9 + ($page - 1) * 9 & $itemCounter > ($page - 1) * 9) {
                    $itemList = $itemList . '<div class="col-md-4 bottom-cd simpleCart_shelfItem">
                                            <div class="product-at">
                                                <a href="index.php?action=SinglePage&id=' . $item["id_annonce"] . '">
                                                    <img class="img-responsive" src="images/annonces/' . $item["id_annonce"] . '.jpg">
                                                 </a>
                                             </div><p class="tun">' . $item["Titre"] . '</p>
                                             <a href="index.php?action=SinglePage&id=' . $item["id_annonce"] . '" class="item_add"><p class="number item_price"><i> </i>' . $item["Prix"] . ' CHF</p></a>
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
            }else{
                if(!in_array($item["Titre"],$ShowingServices)) {
                    $itemCounter++;
                    $ShowingServices[count($ShowingServices)] = $item["Titre"];
                    if ($itemCounter <= 9 + ($page - 1) * 9 & $itemCounter > ($page - 1) * 9) {
                        $itemList = $itemList . '<div class="col-md-4 bottom-cd simpleCart_shelfItem">
                                            <div class="product-at">
                                                <a href="index.php?action=SinglePage&id=' . $item["id_annonce"] . '">
                                                    <img class="img-responsive" src="images/annonces/' . $item["Titre"] . '.jpg">
                                                 </a>
                                             </div><p class="tun">' . $item["Titre"] . '</p>
                                             <a href="index.php?action=SinglePage&id=' . $item["id_annonce"] . '" class="item_add"><p class="number item_price"><i> </i>' . $item["Prix"] . ' CHF</p></a>
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

        }
    }
    $buttonclass="";
    if($page==1) {
        $buttonclass = 'class="disabled"';
    }else{
        $buttonclass='';
    }
    $buttonpage=$page-1;
    $bottombuttons='<li '.$buttonclass.'><a href="index.php?action='.$typeText.'&page='.$buttonpage.'" aria-label="Previous"><span aria-hidden="true">«</span></a></li>';

    $nbbuttons=($itemCounter/9)+1;
    for ($i=1;$i<$nbbuttons;$i++){
        if($page==$i){
            $buttonclass='class="active"';
        }else{
            $buttonclass='';
        }
        $bottombuttons=$bottombuttons.'<li '.$buttonclass.'><a href="index.php?action='.$typeText.'&page='.$i.'">'.$i.'<span class="sr-only"></span></a></li>';
    }
    if($page==$nbbuttons){
        $buttonclass='class="disabled"';
    }else{
        $buttonclass='';
    }
    $buttonpage=$page+1;
    $bottombuttons=$bottombuttons.'<li '.$buttonclass.'> <a href="index.php?action='.$typeText.'&page='.$buttonpage.'" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>';
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
    $userId=-1;
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
function Register($Donnees){
    if($Donnees["password1"]==$Donnees["password2"]) {
        if (checkEmailTaken($Donnees["Email"]) == true) {
            addUser($Donnees);
            $_SESSION["id_utilisateur"] = $Donnees["Email"];
            $_SESSION["Prenom"] = $Donnees["Prenom"];
            $_SESSION["Nom"] = $Donnees["Nom"];
            $_SESSION["Email"] = $Donnees["Email"];
            $_SESSION["Adresse"] = $Donnees["Adresse"];
            $_SESSION["NPA"] = $Donnees["NPA"];
            require "view/home.php";
        } else {
            require "view/register.php";
        }
    }else{
        require "view/register.php";
    }
}
function logout(){
    session_unset();
    require "view/home.php";
}

?>