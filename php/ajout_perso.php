<?php
include ("connexion.php");

$req = $bdd->prepare("INSERT INTO personnages(code_perso, nom_perso, resume_perso, histoire_perso, naissance_perso, deces_perso, statut_perso, id_statut_perso, sexe_perso, nationalite_perso, occupation_perso, role_perso, id_role_perso, anecdote_perso, image_perso, lien_perso, photo_perso) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$req->execute([$_POST["code"],$_POST["nom"], $_POST["resume"], $_POST["histoire"], $_POST["dateNaissance"], $_POST["dateDeces"], $_POST["statut"], $_POST["id_statut"], $_POST["sexe"],$_POST["nationalite"], $_POST["occupation"], $_POST["role"], $_POST["id_role"], $_POST["anecdote"], $_POST["image_perso"], $_POST["lien_perso"], $_POST["photo_perso"]]);

header('Location: menu_modification.php');
?>