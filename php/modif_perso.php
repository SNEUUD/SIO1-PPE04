<?php
include ("connexion.php");
try{
$req = $bdd->prepare("UPDATE personnages SET nom_perso=?, resume_perso=?, histoire_perso=?, naissance_perso=?, deces_perso=?, statut_perso=?, sexe_perso=?, nationalite_perso=?, occupation_perso=?, role_perso=?, anecdote_perso=? WHERE code_perso=?");
$req->execute([$_POST["nom_perso"], $_POST["resume_perso"], $_POST["histoire_perso"], $_POST["naissance_perso"], $_POST["deces_perso"], $_POST["statut_perso"], $_POST["sexe_perso"], $_POST["nationalite_perso"], $_POST["occupation_perso"], $_POST["role_perso"], $_POST["anecdote_perso"], $_POST["id"]]);
} catch(PDOException $e){
    echo $e->getMessage();
}
header('Location: menu_modification.php');
?>