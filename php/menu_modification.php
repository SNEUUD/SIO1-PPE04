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
        session_start();
        include ('entete.php');
        echo $_SESSION['id'];
        if(isset($_SESSION['id'])){
            echo "<script>console.log('SESSION Connected');</script>";
        } else {
            header('Location:page_connexion.php');
        };
    ?>
    <!-- Navbar -->
    <!-- Content -->
    <!-- Content-->
    <div class="px-5 pt-3 pb-3">
        <div class="row" id="content">
            <!-- Content Centre -->
            <div class="col-2" style="border:30px solid transparent">
                <div class="card text-white bg-dark" style="width: 18rem;">
                    <a href="php/menu_modification_perso.php">
                        <img src="images/rdr2_dutch_van_der_linde_256x256.png" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Personnage</h5>
                        <p class="card-text" id="text_card">Vous souhaitez modifier un personnage ?</p>
                    </div>
                </div>
                </br>
                <div class="card text-white bg-dark" style="width: 18rem;">
                    <a href="php/menu_modification_categ.php">
                        <img src="images/bande-de-van-der-linde-m.jpg" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Catégorie</h5>
                        <p class="card-text">Vous souhaitez modifier une catégorie ?</p>
                    </div>
                </div>
            </div>
            <div class="col-2" style="border:30px solid transparent">
                <div class="card text-white bg-dark" style="width: 18rem;">
                    <a href="php/menu_ajout_perso.php">
                        <img src="images/rdr2_dutch_van_der_linde_256x256.png" class="card-img-top" alt="Arthur Morgan">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Personnages</h5>
                        <p class="card-text">Vous souhaitez ajouter un personnages ?</p>
                    </div>
                </div>
                <br>
                <div class="card text-white bg-dark" style="width: 18rem;">
                        <a href="php/menu_ajout_categ.php">
                            <img src="images/bande-de-van-der-linde-m.jpg" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Catégories</h5>
                            <p class="card-text" id="text_card">Vous souhaitez ajouter une catégories ?</p>
                        </div>
                </div>
            </div>
            <div class="col-4" style="border:30px solid transparent">
                <div class="card text-white bg-dark" style="width: 18rem;">
                    <a href="php/menu_supp_perso.php">
                        <img src="images/rdr2_dutch_van_der_linde_256x256.png" class="card-img-top" alt="Arthur Morgan">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Personnages</h5>
                        <p class="card-text">Vous souhaitez supprimer un personnages ?</p>
                    </div>
                </div>
                <br>
                <div class="card text-white bg-dark" style="width: 18rem;">
                        <a href="php/menu_supp_categ.php">
                            <img src="images/bande-de-van-der-linde-m.jpg" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Catégories</h5>
                            <p class="card-text" id="text_card">Vous souhaitez supprimer une catégories ?</p>
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
                    Menu des modifications
                </p>
                <!-- middle -->
                <hr />
                <!-- bottom -->
                <p class="text-center" id="text" style="border:15px solid transparent;">
                    Bonjour <?php echo $_SESSION['user']; ?>,
                    vous pouvez modifier les catégorie ou les personnages.
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