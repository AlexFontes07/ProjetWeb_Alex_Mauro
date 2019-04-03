<?php
/**
 * Created by PhpStorm.
 * User: Mauro-Alexandre.COST
 * Date: 14.03.2019
 * Time: 11:23
 */
function getUserDataBase(){
    $contents=file_get_contents("data/utilisateursDB.json");
    $tempArray = json_decode($contents,true);
    return $tempArray;
}
function getItemDataBase(){
    $contents=file_get_contents("data/annoncesDB.json");
    $tempArray = json_decode($contents,true);
    return $tempArray;
}
function getUserId($email,$password){
    $tempId=-1;
    $array=getUserDataBase();
    foreach($array as $user){
        if($user["Email"]==$email){
            if(password_verify ($password,$user["Password"])){
                $tempId=$user["id_utilisateur"];
            }
        }
    }
    return $tempId;
}

function getFName($userId){
    $array=getUserDataBase();
    $temp= $array[$userId-1]["Prenom"];
    return $temp;
}
function getLName($userId){
    $array=getUserDataBase();
    $temp= $array[$userId-1]["nom"];
    return $temp;
}
function getEmail($userId){
    $array=getUserDataBase();
    $temp= $array[$userId-1]["Email"];
    return $temp;
}
function getAdress($userId){
    $array=getUserDataBase();
    $temp= $array[$userId-1]["Adresse"];
    return $temp;
}
function getPCode($userId){
    $array=getUserDataBase();
    $temp= $array[$userId-1]["NPA"];
    return $temp;
}
function checkEmailTaken($email){
    $res=true;
    $array=getUserDataBase();
    foreach($array as $user){
        if($user["Email"]==$email){
            $res=false;
        }
    }
    return $res;
}
function updateUsers($array){
    $myJSON = json_encode($array,JSON_PRETTY_PRINT);
    file_put_contents('data/utilisateursDB.json',$myJSON);
}
function updateItems($array){
    $myJSON = json_encode($array,JSON_PRETTY_PRINT);
    file_put_contents('data/annoncesDB.json',$myJSON);
}
?>