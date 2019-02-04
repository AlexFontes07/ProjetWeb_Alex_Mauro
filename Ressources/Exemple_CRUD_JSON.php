<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSON CRUD</title>
    <style>
        table, td {
            border: 1px solid black;
            padding: 2px;
            margin: 0px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 25.01.18
 * Time: 13:51
 */


// This function simply returns some hardcoded data
function getData()
{
    return json_decode('[{"Firstname":"Joe","Lastname":"Dalton","Hobby":"Escape room"},{"Firstname":"Jack","Lastname":"Dalton","Hobby":"Creuser des tunnels"},{"Firstname":"William","Lastname":"Dalton","Hobby":"L\'\u00e9sot\u00e9risme"},{"Firstname":"Averell","Lastname":"Dalton","Hobby":"Gober des oeufs"},{"Firstname":"Lucky","Lastname":"Luke","Hobby":"Chopper des m\u00e9chants"}]',true);
}

// ============== Load or create data ================

$dataDirectory = "data";
$dataFileName = "mydata.json";

if (file_exists("$dataDirectory/$dataFileName")) // the file already exists -> load it
{
    $data = json_decode(file_get_contents("$dataDirectory/$dataFileName"),true);
}
else
{
    if (!file_exists($dataDirectory)) // Check if data directory exists
    {
        mkdir($dataDirectory); // if not create it
    }
    $data = getData(); // Initialize data with fixed values
}

// ============== Process commands from GET parameters ================

extract($_GET); // possible variables created: $init, $create, $update, $delete, $index, $firstname, $lastname, $hobby

// === 4 commands are allowed

// --- 1. init
if (isset($init)) // reinitialise data
{
    $data = getData(); // Initialize data with fixed values
    echo "Données réinitialisées";
}

// --- 2. delete
if (isset($delete)) // delete the person of the array who is at index "$index"
{
    echo "Suppression de ".$data[$index]['Firstname']."<br>";

    for ($i=$index; $i < count($data)-1; $i++) // shift all elements beyond the one we must delete
    {
        $data[$i] = $data[$i+1];
    }
    unset($data[$i]); // destroy the last one
}

// --- 3. create
if (isset($create)) // add one person at the end of the array.
{
    //$newfriend = array("Firstname" => "Bryan", "Lastname=" => "Kitchen", "Hobby" => "Play");
    echo "Ajout de $firstname<br>";
    if (isset($firstname)) // a first name was given in the querystring
    {
        $newfriend['Firstname']=$firstname; // La ligne à vérifier
    }
    if (isset($lastname)) // a last name was given in the querystring
    {
        $newfriend['Lastname']=$lastname;
    }
    if (isset($hobby)) // a hobby was given in the querystring
    {
        $newfriend['Hobby']=$hobby;
    }
    $data[] = $newfriend; // add new friend at the end of the list
}

// --- 4. update
if (isset($update)) // Modify the person of the array who is at index "$index"
{
    $friend = $data[$index];
    echo "Modification de ".$friend['Firstname']."<br>";
    if (isset($firstname)) // a first name was given in the querystring
    {
        $friend['Firstname']=$firstname;
    }
    if (isset($lastname)) // a last name was given in the querystring
    {
        $friend['Lastname']=$lastname;
    }
    if (isset($hobby)) // a hobby was given in the querystring
    {
        $friend['Hobby']=$hobby;
    }
    $data[$index] = $friend; // save
}

// ============== Save data ================

file_put_contents("$dataDirectory/$dataFileName", json_encode($data));

// ============== Display data ================

echo "<h1>Mes amis</h1>";
echo "<table>";
echo "<tr><th>Prénom</th><th>Nom</th><th>Hobby</th></tr>";


foreach ($data as $friend)
{
    echo "<tr><td>" . $friend['Firstname'] . "</td><td>" . $friend['Lastname']. "</td><td>" . $friend['Hobby'] . "</td></tr>";
}
echo "</table>";
?>

<h3>Commandes</h3>
<a href="?init">Réinitialiser</a><br>
<!--<a href="?create&firstname=Rantan&lastname=Plan&hobby=Jouer%20à%20la%20baballe">Ajouter</a><br> -->
<a href="?create&firstname=Rantan&lastname=Plan&hobby=Jouer">Ajouter</a><br>
<a href="?update&index=3&hobby=Gober%20des%20boeufs">Modifier</a><br>
<a href="?delete&index=0">Supprimer</a><br>
</body>
</html>

