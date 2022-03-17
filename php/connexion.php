<?php
//Souvent on identifie cet objet par la variable $conn ou $db
$bdd = new PDO(
    'mysql:host=localhost;dbname=ppe04;charset=utf8',
    'User',
    'User123'
);


$bdd = $pdo->prepare("SELECT * FROM Admin WHERE login = ?");
$bdd->execute([$_POST['login']]);
$login = $bdd->fetch();

if ($login && password_verify($_POST['User'], $login['User123']))
{
    echo "valid!";
} else {
    echo "invalid";
}



?>