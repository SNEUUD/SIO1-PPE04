<html>

<head>
    <meta charset="utf-8" />
    <title>PPE04 - Red Dead Redemption II - Connexions</title>
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
    include ('../php/entete.php');
    ?>
    <!-- Navbar -->
    <!-- Content-->
    <div class="px-5 pt-3 pb-3">
        <div class="row justify-content-center" id="content">
            <!-- Content Centre -->
            <div class="col-4" id="text" style="border:30px solid transparent">
                <fieldset id="text">
                    <legend><button id="togg1" class="btn btn-dark" onclick="Connexion()">Connexion</button> - <button
                            id="togg2" class="btn btn-dark" onclick="Inscription()">Inscription</button></legend>
                    <div id="d1" style="display:block;">
                        <form action="php/Authentification.php" method="post">
                            <table>
                                <tr>
                                    <td>
                                        <label style="color:white;">Identifiant</label>
                                    </td>
                                    <td>
                                        <input type="text" name="id">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="color:white;">Password</label>
                                    </td>
                                    <td>
                                        <input type="password" name="password">
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="Connexion">
                                    </td>
                                    <td>
                                        <input type="reset" value=" Annuler ">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div id="d2" style="display:none;">
                        <form action="php/creer_utilisateur.php" method="post">
                            <table>
                                <tr>
                                    <td>
                                        <label style="color:white;">Identifiant</label>
                                    </td>
                                    <td>
                                        <input type="text" name="id_new">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="color:white;">Password</label>
                                    </td>
                                    <td>
                                        <input type="password" name="password_new">
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="Créer le compte">
                                    </td>
                                    <td>
                                        <input type="reset" value=" Annuler ">
                                    </td>
                                </tr>
                            </table>
                    </div>
                    </form>
            </div>
            </legend>
            </fieldset>
        </div>
        <script type="text/javascript">
            function Connexion() {
                var btn_connexion = document.getElementById("d1");
                var btn_inscription = document.getElementById("d2");
                if (btn_connexion.style.display === "none") {
                    btn_connexion.style.display = "block";
                    btn_inscription.style.display = "none";
                } else if (btn_connexion.style.display === "block") {
                    btn_connexion.style.display = "block";
                    btn_inscription.style.display = "none";
                }
            }
            function Inscription() {
                var btn_connexion = document.getElementById("d1");
                var btn_inscription = document.getElementById("d2");
                if (btn_inscription.style.display === "none") {
                    btn_connexion.style.display = "none";
                    btn_inscription.style.display = "block";
                } else if (btn_inscription.style.display === "block") {
                    btn_connexion.style.display = "none";
                    btn_inscription.style.display = "block";
                }
            }
        </script>
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
</body>

</html>