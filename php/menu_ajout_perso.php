<html>

<head>
    <meta charset="utf-8" />
    <title>PPE04 - Red Dead Redemption II - Modifications</title>
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
    ?>
    <!-- Navbar -->
    <!-- Content-->
    <div class="px-5 pt-3 pb-3">
        <div class="row" id="content">
            <!-- Content Centre -->
            <div class="col-12" id="text" style="border:30px solid transparent">
                <legend>Ajouter</legend>
                    <form action="php/ajout_perso.php" method="post">
                    <table>
                            <tr>
                                <td><label style="color:white;"> ID du personnage : </label></td>
                                <td>
                                    <input type="text" name="code">
                                </td>
                            </tr>
                            <tr>
                                <td><label style="color:white;"> Saisir le nom du personnages : </label></td>
                                <td>
                                    <input type="text" name="nom">
                                </td>
                            </tr>
                            <tr>
                                <td><label style="color:white;"> Saisir le résumé : </label></td>
                                <td>
                                    <input type="text" name="resume">
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir l'histoire du personnages : </label></td>
                                <td>
                                    <input type="text" name="histoire">
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir la date de naissance : </label></td>
                                <td>
                                    <input type="text" name="dateNaissance">
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir la date de décès : </label></td>
                                <td>
                                    <input type="text" name="dateDeces">
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir le statut du personnages : </label></td>
                                <td>
                                    <input type="text" name="statut">
                                </td>
                            </tr>
                                <td><label style="color:white;"> Saisir l'id du statut du personnages : </label></td>
                                <td>
                                    <input type="int" name="id_statut">
                            <tr>

                                <td><label style="color:white;"> Saisir le sexe du personnages : </label></td>
                                <td>
                                    <input type="text" name="sexe">
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir la nationalité du personnages : </label></td>
                                <td>
                                    <input type="text" name="nationalite">
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir l'occupation du personnages : </label></td>
                                <td>
                                    <input type="text" name="occupation">
                                </td>
                            </tr>
                            <tr>

                                <td><label style="color:white;"> Saisir le rôle du personnages : </label></td>
                                <td>
                                    <input type="text" name="role">
                                </td>
                            </tr>
                            <tr>
                                <td><label style="color:white;"> Saisir l'id du rôle du personnages : </label></td>
                                <td>
                                    <input type="int" name="id_role">
                                </td>
                            <tr>
                                <td><label style="color:white;"> Saisir l'anecdote du personnages : </label></td>
                                <td>
                                    <input type="text" name="anecdote">
                                </td>
                            </tr>
                            <tr>
                                <td><label style="color:white;"> Saisir l'image perso</label></td>
                                <td>
                                    <input type="text" name="image_perso">
                                </td>
                            </tr>
                            <tr>
                                <td><label style="color:white;"> Saisir le lien du personnages </label></td>
                                <td>
                                    <input type="text" name="lien_perso">
                                </td>
                            </tr>
                            <tr>
                                <td><label style="color:white;"> Saisir la photo du personnage : </label></td>
                                <td>
                                    <input type="text" name="photo_perso">
                                </td>
                            </tr>
                            <td>
                                <p><input type="submit" value="Créer"><input type="button" value="Annuler">
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