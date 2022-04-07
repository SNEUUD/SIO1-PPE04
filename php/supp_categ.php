<?php
include ('connexion.php');
$id = $_GET["id"];

$req = $bdd->prepare("DELETE FROM categories where code_categ=?");
$req->execute([$id]);

header('Location: menu_modification.php');
?>