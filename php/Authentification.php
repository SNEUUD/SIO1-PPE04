<?php

include ('connexion.php');

$lgn = $bdd->prepare("SELECT * FROM administrateurs WHERE user_admin = ?");
$lgn->execute([$_POST['id']]);
$login = $lgn->fetch();

if ($login && ($_POST['password']==$login['password_admin']))
{
    header('Location: menu_modification.php');
} else {
    header('Location: page_connexion.php');
    
}

?>