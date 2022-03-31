<html>

<head>
    <meta charset="utf-8" />
    <title>PPE04 - Red Dead Redemption II - Histoire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/navbar_icon.png" />
    <base href="../">
</head>

<body>
    <!-- Navbar -->
    <?php
    include ('entete.php');
    include ('../personnages/affiche_perso.php');
    ?>
    <!-- Navbar -->
    <!-- Content-->
    <div class="px-5 pt-3 pb-3">
        <div class="row" id="content">
            <!-- Content Centre -->
            <div class="col-12" id="text" style="border:30px solid transparent">
            <legend>Mettre à jour  </legend>
<form method="post" action="modif.php"
?php>
   <table>
       <tr>
            <td><label> Saisir l'id du perso : </label></td>
            <td><?php echo "<input type=\"text\" name=\"code_perso\" readonly=\"true\" value=\"$code\">"; ?></td>
        </tr>
        <tr>
            <td><label> Saisir le nom du perso : </label></td>
            <td><?php echo "<input type=\"text\" name=\"nom_perso\"  value=\"$nom\">"; ?></td>
        </tr>
        <tr>
            <td><label> Saisir le résumé : </label></td>
            <td><?php echo "<input type=\"text\" name=\"resume_perso\" value=\"$resume\">"; ?></td>
        </tr>
        <tr>

            <td><label> Saisir l'histoire du perso : </label></td>
            <td><?php echo "<input type=\"text\" name=\"histoire_perso\" value=\"$histoire\">"; ?></td>
        </tr>
        <tr>

            <td><label> Saisir la date de naissance : </label></td>
            <td><?php echo "<input type=\"text\" name=\"naissance_perso\" value=\"$naissance\">"; ?></td>
        </tr>
        <tr>

            <td><label> Saisir la date de décès : </label></td>
            <td><?php echo "<input type=\"text\" name=\"deces_perso\" value=\"$deces\">"; ?></td>
        </tr>
        <tr>

            <td><label> Saisir le statut de perso : </label></td>
            <td><?php echo "<input type=\"text\" name=\"statut_perso\" value=\"$statut\">"; ?></td>
        </tr>
        <tr>

            <td><label> Saisir le sexe du perso : </label></td>
            <td><?php echo "<input type=\"text\" name=\"sexe_perso\" value=\"$sexe\">"; ?></td>
        </tr>
        <tr>

            <td><label> Saisir la nationalité du perso  : </label></td>
            <td><?php echo "<input type=\"text\" name=\"nationalite_perso\" value=\"$nationalite\">"; ?></td>
        </tr>
        <tr>

            <td><label> Saisir l'occupation du perso : </label></td>
            <td><?php echo "<input type=\"text\" name=\"occupation_perso\" value=\"$occupation\">"; ?></td>
        </tr>
        <tr>

            <td><label> Saisir le rôle du perso : </label></td>
            <td><?php echo "<input type=\"text\" name=\"role_perso\" value=\"$role\">"; ?></td>
        </tr>
        <tr>

            <td><label> Saisir l'anecdote du perso : </label></td>
            <td><?php echo "<input type=\"text\" name=\"anecdote_perso\" value=\"$anecdote\">"; ?></td>
        </tr>
            <td><p><input type="submit" value="Envoyer"><input type="button" value="Annuler"></td>
</form>
                
            </div>
            <!-- Content Centre -->
        </div>
    </div>
    <!-- Content-->
    <!-- Footer -->
    <footer class="bg-dark">
        <div class="text-center p-2 footer-text">
            © PPE04 - Dorian Martin et Christopher Crépin - SIO Slam 2022
        </div>
    </footer>
    <!-- Footer -->