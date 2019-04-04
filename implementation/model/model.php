<?php
/**
 * Created by PhpStorm.
 * User: Mauro-Alexandre.COST
 * Date: 14.03.2019
 * Time: 11:23
 */
/**
 * fonction qui envoie la base de données des utilisateurs en forme d'un tableau 2d
 * @return un array 2d avec tous les utilisateurs
 */
function getUserDataBase(){
    $contents=file_get_contents("data/utilisateursDB.json");
    $tempArray = json_decode($contents,true);
    return $tempArray;
}
/**
 * fonction qui envoie la base de données des annonces en forme d'un tableau 2d
 * @return un array 2d avec toutes les annonces
 */
function getItemDataBase(){
    $contents=file_get_contents("data/annoncesDB.json");
    $tempArray = json_decode($contents,true);
    return $tempArray;
}

/**
 * fonction qui trouve l'id d'un utilisateur avec l'email et le mot de passe
 * @param $email email de l'utilisateur qu'on cherche
 * @param $password mot de passe de l'utilisateur qu'on cherche
 * @return int id de l'utilisateur si on l'a trouvé (-1 si non)
 */
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

/**
 * fonction qui trouve le prenom de l'utilisateur avec l'id
 * @param $userId id de l'utilisateur
 * @return mixed  prénom de l'utilisateur
 */
function getFName($userId){
    $array=getUserDataBase();
    $temp= $array[$userId-1]["Prenom"];
    return $temp;
}
/**
 * fonction qui trouve le nom de l'utilisateur avec l'id
 * @param $userId id de l'utilisateur
 * @return mixed  nom de l'utilisateur
 */
function getLName($userId){
    $array=getUserDataBase();
    $temp= $array[$userId-1]["nom"];
    return $temp;
}
/**
 * fonction qui trouve l'Email de l'utilisateur avec l'id
 * @param $userId id de l'utilisateur
 * @return mixed  Email de l'utilisateur
 */
function getEmail($userId){
    $array=getUserDataBase();
    $temp= $array[$userId-1]["Email"];
    return $temp;
}
/**
 * fonction qui trouve l'Adresse de l'utilisateur avec l'id
 * @param $userId id de l'utilisateur
 * @return mixed  Adresse de l'utilisateur
 */
function getAdress($userId){
    $array=getUserDataBase();
    $temp= $array[$userId-1]["Adresse"];
    return $temp;
}
/**
 * fonction qui trouve le NPA de l'utilisateur avec l'id
 * @param $userId id de l'utilisateur
 * @return mixed  NPA de l'utilisateur
 */
function getPCode($userId){
    $array=getUserDataBase();
    $temp= $array[$userId-1]["NPA"];
    return $temp;
}

/**
 * fonction qui vérifie si il ya des utilisateurs avec un certain Email
 * @param $email Email qu'on veut verifier
 * @return bool True si l'Email est valable, False si non
 */
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

/**
 * fonction qui mets a jour le fichier Json des utilisateurs
 * @param $array tableau qu'on veut enregistrer dans le ficher Json
 */
function updateUsers($array){
    $myJSON = json_encode($array,JSON_PRETTY_PRINT);
    file_put_contents('data/utilisateursDB.json',$myJSON);
}

/**
 * fonction qui mets à jour le fichier Json des annonces
 * @param $array tableau qu'on veut enregistrer dans le ficher Json
 */
function updateItems($array){
    $myJSON = json_encode($array,JSON_PRETTY_PRINT);
    file_put_contents('data/annoncesDB.json',$myJSON);
}
?>