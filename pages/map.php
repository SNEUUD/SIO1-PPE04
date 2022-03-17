<html>

<head>
    <meta charset="utf-8" />
    <title>PPE04 - Red Dead Redemption II - Map</title>
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
        include ('../php/entete.php');
    ?>
    <!-- Navbar -->
    <!-- Content-->
    <div class="px-5 pt-3 pb-3">
        <div class="row" id="content">
            <!-- Content Centre -->
            <div class="col-8" id="text" style="border:30px solid transparent">
                <iframe title="Red Dead Redemption 2 3D Map" frameborder="0" allowfullscreen mozallowfullscreen="true"
                    webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                    execution-while-out-of-viewport execution-while-not-rendered web-share width="100%" height="100%"
                    src="https://sketchfab.com/models/af68b2398b99446dbf0f7e90f9f104f3/embed">
                </iframe>
            </div>
            <!-- Content Centre -->
            <!-- Content Droit -->
            <div class="col-4" style="border:30px solid transparent">
                <!-- top -->
                <p id="index_content_droite_paragraphe"><img src="images/Carte02.webp"
                        style="border:30px solid transparent;  max-width: 90%; max-height: 90%;" /></p>
                <!-- top -->
                <hr />
                <!-- middle -->
                <p class="text-center" id="text" style="border:15px solid transparent;">
                Carte de Red Dead Redemption II. 
                </p>
                <!-- middle -->
                <hr />
                <!-- bottom -->
                <p class="text-center" id="text" style="border:15px solid transparent;">
                    Elle est constituée de trois états (ou zones) chacun constitué de régions :<br>
                    - New Austin<br>
                    - Nuevo Paraíso<br>
                    - West Elizabeth<br>
                </p>
                <!-- bottom -->
            </div>
            <!-- Content Droit -->
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