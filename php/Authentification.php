<?php

session_start();
include ('connexion.php');

$lgn = $bdd->prepare("SELECT * FROM administrateurs WHERE user_admin = ?");
$lgn->execute([$_POST['id']]);
$login = $lgn->fetch();

if ($login['user_admin'] && ($_POST['password']==$login['password_admin']))
{
    $_SESSION['id'] = $login['id_admin'];
    $_SESSION['user'] = $login['user_admin'];
    header('Location: menu_modification.php');
} else {
    echo
    '<script type="text/javascript">
    alert(\'⛔ Votre mot de passe ou votre user est incorrecte\');
    self.location.href="page_connexion.php";
    </script>';   
}

?>