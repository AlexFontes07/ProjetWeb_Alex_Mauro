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
    $temp="";
    $array=getUserDataBase();
    foreach($array as $user){
        if($user["id_utilisateur"]==$userId){
            $temp= $user["Prenom"];
        }
    }
    return $temp;
}
function getLName($userId){
    $temp="";
    $array=getUserDataBase();
    foreach($array as $user){
        if($user["id_utilisateur"]==$userId){
            $temp= $user["nom"];
        }
    }
    return $temp;
}
function getEmail($userId){
    $temp="";
    $array=getUserDataBase();
    foreach($array as $user){
        if($user["id_utilisateur"]==$userId){
            $temp= $user["Email"];

        }
    }
    return $temp;
}
function getAdress($userId){
    $temp="";
    $array=getUserDataBase();
    foreach($array as $user){
        if($user["id_utilisateur"]==$userId){
            $temp= $user["Adresse"];

        }
    }
    return $temp;
}
function getPCode($userId){
    $temp="";
    $array=getUserDataBase();
    foreach($array as $user){
        if($user["id_utilisateur"]==$userId){
            $temp= $user["NPA"];
        }
    }
    return $temp;
}
?>