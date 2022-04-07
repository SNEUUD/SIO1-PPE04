<?php
include ("connexion.php");

$req = $bdd->prepare("INSERT INTO categories(code_categ, nom_categ, description_categ) values(?,?,?)");
$req->execute([$_POST["code"],$_POST["nom"],$_POST["description"]]);

header('Location: menu_modification.php');
?>