<?php
include ("connexion.php");
try{
$req = $bdd->prepare("UPDATE categories SET nom_categ=?, description_categ=? WHERE code_categ=?");
$req->execute([$_POST["nom"], $_POST["description"], $_POST["code"]]);
} catch(PDOException $e){
    echo $e->getMessage();
}
header('Location: menu_modification.php');
?>