<?php
/**
 * Created by PhpStorm.
 * User: Mauro-Alexandre.COST
 * Date: 11.03.2019
 * Time: 08:14
 */

require "model/model.php";
function openSingle_contact($id){
    if(isset($_SESSION["Email"])) {
        $array = getItemDataBase();
        $id -= 1;
        $venteur=getLName($array[$id]["id_utilisateur"])." ".getFName($array[$id]["id_utilisateur"]);
        $email = getEmail($array[$id]["id_utilisateur"]);
        require "view/single_contact.php";
    }else{
        openLogin();
    }
}

function openSingle($id){
    $array=getItemDataBase();
    $id-=1;
    $avalableServices="";
    foreach($array as $item){
        if($item["Type"]==3){
            if($item["Disponiblite"]!=0) {
                if ($item["Titre"] == $array[$id]["Titre"]) {
                    $avalableServices = $avalableServices . '<li><span><a href="index.php?action=SingleContactPage&id=' . $item["id_annonce"] . '" class="add-cart item_add">Contacter</a></span>';
                    $avalableServices = $avalableServices . '<span class="women1">' . getFName($item["id_utilisateur"]) . ' ' . getLName($item["id_utilisateur"]) . '</span></li> ';
                }
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
            if($item["Disponiblite"]!=0) {
                if ($type != 3) {
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
                } else {
                    if (!in_array($item["Titre"], $ShowingServices)) {
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
    if(isset($_SESSION["id_utilisateur"])){
        require "view/contact.php";
    }else{
        openLogin();
    }

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

function showAnnonces(){
    $array=getItemDataBase();
    $listeAnnonces="";
    foreach($array as $item){
        if($item["id_utilisateur"]==$_SESSION["id_utilisateur"]){
            $listeAnnonces=$listeAnnonces.'<tr><form enctype="multipart/form-data" action="index.php?action=update&id='.$item["id_annonce"].'" method="post"><th>'.$item["id_annonce"].'</th>';
            $listeAnnonces=$listeAnnonces.'<th>'.$item["Type"].'</th>';
            if($item["Type"]==3){
                $modifiable=" disabled";
            }else{
                $modifiable="";
            }
            $listeAnnonces=$listeAnnonces.'<th><input class="inputCenter" name="Titre" value="'.$item["Titre"].'" type="text"'.$modifiable.'></th>';
            $listeAnnonces=$listeAnnonces.'<th><input class="inputCenter" name="Prix" value="'.$item["Prix"].'" type="number"'.$modifiable.'></th>';
            $listeAnnonces=$listeAnnonces.'<th><input class="inputCenter" name="Desc" value="'.$item["Description"].'" type="text"'.$modifiable.'></th>';
            if($item["Type"]==3){
                $listeAnnonces=$listeAnnonces."<th>impossible de changer l'image</th>";
            }else{
                $listeAnnonces=$listeAnnonces.'<th><input accept=".jpg" type="file" name="Upload" id="fileToUpload"></th>';
            }

            if($item["Disponiblite"]==1){
                $chkstatus=" Checked";
            }else{
                $chkstatus="";
            }
            $listeAnnonces=$listeAnnonces.'<th><input class="inputCenter" type="checkbox" name="Chk" '.$chkstatus.'>Cocher si dispo.</th>';
            $listeAnnonces=$listeAnnonces.'<th><button type="submit" value="Submit">Enregistrer</button></th></form></tr>';
        }
    }
    require "view/annonces.php";
}
function addUser($data){
    $array=getUserDataBase();
    $userID=count($array);
    $array[$userID]["id_utilisateur"]=$userID+1;
    $array[$userID]["nom"]=$data["Nom"];
    $array[$userID]["Prenom"]=$data["Prenom"];
    $array[$userID]["Email"]=$data["Email"];
    $array[$userID]["Password"]=password_hash($data["password1"], PASSWORD_DEFAULT);
    $array[$userID]["Adresse"]=$data["Adresse"];
    $array[$userID]["NPA"]=$data["NPA"];
    updateUsers($array);

}
function updateArticle($id,$donnees){

    $array=getItemDataBase();
    if($array[$id-1]["Type"]!=3){
        if($_FILES["Upload"]["size"]!=0) {
            move_uploaded_file($_FILES["Upload"]["tmp_name"], 'images/annonces/' . $id . '.jpg');
        }
        $array[$id-1]["Titre"]=$donnees["Titre"];
        $array[$id-1]["Prix"]=$donnees["Prix"];
        $array[$id-1]["Description"]=$donnees["Desc"];
        if($donnees["Chk"]=="on"){
            $array[$id-1]["Disponiblite"]=1;
        }else{
            $array[$id-1]["Disponiblite"]=0;
        }
    }else{
        if($donnees["Chk"]=="on"){
            $array[$id-1]["Disponiblite"]=1;
        }else{
            $array[$id-1]["Disponiblite"]=0;
        }
    }

    updateItems($array);
    showAnnonces();
}
function addItem($donnees){
    $array=getItemDataBase();
    $type=0;
    $id=count($array);
    if($donnees["type"]=="vendre"){
        $type=1;
    }else{
        if($donnees["type"]=="louer"){
            $type=2;
        }else{
            $type=3;
        }
    }
    if($type!=3){
        $array[$id]["id_annonce"]=$id+1;
        $array[$id]["Titre"]=$donnees["Name"];
        $array[$id]["Description"]=$donnees["Desc"];
        $array[$id]["Prix"]=$donnees["Prix"];
        $array[$id]["Type"]=$type;
        $array[$id]["Disponiblite"]=1;
        $array[$id]["id_utilisateur"]=$_SESSION["id_utilisateur"];
        if($_FILES["Upload"]["size"]!=0) {
            $imgName=$id+1;
            move_uploaded_file($_FILES["Upload"]["tmp_name"], 'images/annonces/' .  $imgName . '.jpg');
        }
    }else{
        $array[$id]["id_annonce"]=$id+1;
        switch ($donnees["add"]){
            case 1:
                $array[$id]["Titre"]="Jardinage";
                $array[$id]["Description"]="magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu";
                $array[$id]["Prix"]=35;
                break;
            case 2:
                $array[$id]["Titre"]="Aide au Déménagement";
                $array[$id]["Description"]="Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis";
                $array[$id]["Prix"]=40;
                break;
            case 3:
                $array[$id]["Titre"]="Garde d'enfants";
                $array[$id]["Description"]="amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et nunc.";
                $array[$id]["Prix"]=50;
                break;
            case 4:
                $array[$id]["Titre"]="Garde de chien";
                $array[$id]["Description"]="dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per";
                $array[$id]["Prix"]=30;
                break;
            case 5:
                $array[$id]["Titre"]="Garde de chat";
                $array[$id]["Description"]="non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim,";
                $array[$id]["Prix"]=20;
                break;
            case 6:
                $array[$id]["Titre"]="Lavage de voiture";
                $array[$id]["Description"]="erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed";
                $array[$id]["Prix"]=20;
                break;
            case 7:
                $array[$id]["Titre"]="Nettoyage de PC";
                $array[$id]["Description"]="pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem";
                $array[$id]["Prix"]=90;
                break;
            case 8:
                $array[$id]["Titre"]="Tondre la pelouse";
                $array[$id]["Description"]="Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique";
                $array[$id]["Prix"]=40;
                break;
            case 9:
                $array[$id]["Titre"]="Repassage";
                $array[$id]["Description"]="in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In";
                $array[$id]["Prix"]=40;
                break;
            case 10:
                $array[$id]["Titre"]="Lavage de vitres";
                $array[$id]["Description"]="nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis";
                $array[$id]["Prix"]=50;
                break;

        }
        $array[$id]["Type"]=3;
        $array[$id]["Disponiblite"]=1;
        $array[$id]["id_utilisateur"]=$_SESSION["id_utilisateur"];

    }
    updateItems($array);
    showAnnonces();
}
function sendMail($donnees,$id)
{
    $email="";
    $subject="";
    $headers=array(
        'From' => $_SESSION["Email"],
        'Reply-To' => $_SESSION["Email"],
        'X-Mailer' => 'PHP/' . phpversion()
    );
    $arrayProducts=getItemDataBase();
    $arrayUsers=getUserDataBase();
    if($id==0){
        $email="Alexandre.Fontes@cpnv.ch";
        $subject=$donnees["Sujet"];
    }else{
        $email=$arrayUsers[$arrayProducts[$id-1]["id_utilisateur"]-1]["Email"];
        $subject="Reponse à votre annonce de ".$arrayProducts[$id-1]["Titre"];
    }


    mail($email, $subject, $donnees['message'], $headers);
}
?>