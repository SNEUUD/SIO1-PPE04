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
        <div class="row" id="content">
            <!-- Content Centre -->
            <div class="col-12" id="text" style="border:30px solid transparent">
                <fieldset id="text">
                    <legend>Connexion</legend>
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
                                <td>
                                    <input type="submit" value="Connexion">
                                </td>
                                <td>
                                    <input type="reset" value=" Annuler ">
                                </td>
                            </tr>
                        </table>
                    </form>
                    </legend>
                </fieldset>
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
</body>

</html>