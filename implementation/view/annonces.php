<?php
/**
 * Created by PhpStorm.
 * User: Alexandre Fontes
 * Date: 08.03.2019
 * Time: 10:30
 */
ob_start();
$titre="RentASnow - Accueil";
?>
<style>
    .inputCenter{
        text-align: center;
    }
</style>
<div class="account">
    <h1>Mes annonces</h1>
    <p style="text-align: left;"><a href='index.php?action=new_annonce'><button>Ajouter une annonce</button></a></p>
    <table class="table textcolor">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Titre</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Images</th>
            <th>Disponibilité</th>
            <th>Enregistrer</th>
        </tr>
        <tr>
            <th>1</th>
            <th>Vente</th>
            <th><input class="inputCenter" value="Xbox" type="text"></th>
            <th><input class="inputCenter" value="100" type="text"></th>
            <th><input class="inputCenter" value="Belle Xbox" type="text"></th>
            <th><input type="file" name="fileToUpload" id="fileToUpload"></th>
            <th><input class="inputCenter" type="checkbox" name="vehicle1" value="Bike">Cocher si dispo.</th>
            <th><button type="submit" value="Submit">Enregistrer</button></th>
        </tr>
    </table>
</div>
<?php
$contenu = ob_get_clean();
require "gabarit.php";
?>




