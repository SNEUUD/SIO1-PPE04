<html>

<head>
    <meta charset="utf-8" />
    <title>PPE04 - Red Dead Redemption II - Modifications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="icon" href="images/navbar_icon.png" />
    <base href="../">
</head>

<body>
    <!-- Navbar -->
    <?php
    include ('entete.php');
    include ('connexion.php');

    $code = $_GET["id"];

    $req = $bdd->prepare("SELECT * FROM personnages WHERE code_perso=?");
    $req->execute([$code]);
    $perso = $req->fetch();
    $id = $perso['code_perso'];
    $nom = $perso['nom_perso'];
    $resume = $perso['resume_perso'];
    $histoire = $perso['histoire_perso'];
    $naissance = $perso['naissance_perso'];
    $deces = $perso['deces_perso'];
    $statut = $perso['statut_perso'];
    $id_statut = $perso['id_statut_perso'];
    $sexe = $perso['sexe_perso'];
    $nationalite = $perso['nationalite_perso'];
    $occupation = $perso['occupation_perso'];
    $role = $perso['role_perso'];
    $id_role = $perso['id_role_perso'];
    $anecdote = $perso['anecdote_perso'];
    $photo = $perso['photo_perso'];
    ?>
    <!-- Navbar -->
    <!-- Content-->
    <div class="px-5 pt-3 pb-3">
        <div class="row" id="content">
            <!-- Content Centre -->
            <div class="col-12" id="text" style="border:30px solid transparent">
                <legend>Mettre à jour</legend>
                    <form action="php/modif_perso.php" method="post">
                        <table>
                            <tr>
                                <td><label style="color:white;"> ID du personnage : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"id\" readonly=\"true\" value=\"$id\">"; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><label style="color:white;"> Saisir le nom du personnages : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"nom_perso\"  value=\"$nom\">"; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><label style="color:white;"> Saisir le résumé : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"resume_perso\" value=\"$resume\">"; ?>
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir l'histoire du personnages : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"histoire_perso\" value=\"$histoire\">"; ?>
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir la date de naissance : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"naissance_perso\" value=\"$naissance\">"; ?>
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir la date de décès : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"deces_perso\" value=\"$deces\">"; ?>
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir le statut du personnages : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"statut_perso\" value=\"$statut\">"; ?>
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir le sexe du personnages : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"sexe_perso\" value=\"$sexe\">"; ?>
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir la nationalité du personnages : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"nationalite_perso\" value=\"$nationalite\">"; ?>
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir l'occupation du personnages : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"occupation_perso\" value=\"$occupation\">"; ?>
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir le rôle du personnages : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"role_perso\" value=\"$role\">"; ?>
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir l'anecdote du personnages : </label></td>
                                <td>
                                    <?php echo "<input type=\"text\" name=\"anecdote_perso\" value=\"$anecdote\">"; ?>
                                </td>
                            </tr>
                            <td>
                                <p><input type="submit" value="Envoyer"><input type="button" value="Annuler">
                            </td>
                        </table>
                    </form>
                </legend>
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