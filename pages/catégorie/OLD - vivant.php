<html>

<head>
    <meta charset="utf-8" />
    <title>PPE04 - Red Dead Redemption II - Catégorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="icon" href="../../images/navbar_icon.png" />
    <base href="../../">
</head>

<body>
    <!-- Navbar -->
    <?php
        include ('../../php/entete.php');
    ?>
    <!-- Navbar -->
    <!-- Content -->
    <!-- Content-->
    <div class="px-5 pt-3 pb-3">
        <div class="row" id="content">
            <!-- Content Centre -->
            <div class="col-8" style="border:30px solid transparent">
                <div class="card text-white bg-dark" style="width: 18rem;">
                  <a href="pages/personnages/charles_smith.php">
                    <img src="images/rdr2_charles_smith_256x256.png" class="card-img-top" alt="Charles Smith">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Charles Smith</h5>
                    <p class="card-text">Charles est un homme discret et réservé qui se montre extrêmement compétent dans tout
                      ce qu'il entreprend et qui s'avère quasiment imbattable au combat.</p>
                  </div>
                </div>
                </br>
                <div class="card text-white bg-dark" style="width: 18rem;">
                    <a href="pages/personnages/sadie_adler.php">
                      <img src="images/rdr2_sadie_adler_256x256.png" class="card-img-top" alt="Sadie Adler">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title">Sadie Adler</h5>
                      <p class="card-text">Une veuve qui cherche à tout prix à venger la mort de son mari. Implacable, elle n'a
                        peur de rien ni de personne. De mauvais augure pour ceux qui croisent sa route.</p>
                    </div>
                </div>
            </div>
            <!-- Content Centre -->
            <!-- Content Droit -->
            <div class="col-4" style="border:30px solid transparent">
                <!-- top -->
                <p id="index_content_droite_paragraphe"><img src="images/index_img_navbar.png"
                        style="border:30px solid transparent;  max-width: 90%; max-height: 90%;" /></p>
                <!-- top -->
                <hr />
                <!-- middle -->
                <p class="text-center" id="text" style="border:15px solid transparent;">
                    Vivant
                </p>
                <!-- middle -->
                <hr />
                <!-- bottom -->
                <p class="text-center" id="text" style="border:15px solid transparent;">
                    Liste des personnages de Red Dead Redemption II vivant après 1911. 
                </p>
                <!-- bottom -->
            </div>
            <!-- Content Droit -->
        </div>
    </div>
    <!-- Content -->
    <!-- Footer -->
    <footer class="bg-dark">
        <div class="text-center p-2 footer-text">
            © PPE04 - Dorian Martin et Christopher Crépin - SIO Slam 2022
        </div>
    </footer>
    <!-- Footer -->
</body>

</html>