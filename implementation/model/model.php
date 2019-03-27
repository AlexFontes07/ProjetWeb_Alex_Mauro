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
            if($user["Password"]==$password){
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
function addUser($data){
    $array=getUserDataBase();
    $userID=count($array);
    $array[$userID]["id_utilisateur"]=$userID+1;
    $array[$userID]["nom"]=$data["Nom"];
    $array[$userID]["Prenom"]=$data["Prenom"];
    $array[$userID]["Email"]=$data["Email"];
    $array[$userID]["Password"]=$data["password1"];
    $array[$userID]["Adresse"]=$data["Adresse"];
    $array[$userID]["NPA"]=$data["NPA"];
    updateJson($array);

}
function updateJson($array){
    $myJSON = json_encode($array);
    file_put_contents('data/utilisateursDB.json',$myJSON);
}
?>