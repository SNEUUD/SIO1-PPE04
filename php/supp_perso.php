<?php
include ('connexion.php');
$id = $_GET["id"];

$req = $bdd->prepare("DELETE FROM personnages where code_perso=?");
$req->execute([$id]);

header('Location: menu_modification.php');
?>