<?php
include ("connexion.php");

$req = $bdd->prepare("INSERT INTO administrateurs(user_admin, password_admin) values(?,?)");
$req->execute([$_POST["id_new"], $_POST["password_new"]]);

header('Location: page_connexion.php');
?>