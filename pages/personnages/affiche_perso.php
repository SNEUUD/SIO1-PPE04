<html>

<head>
    <meta charset="utf-8" />
    <title>PPE04 - Red Dead Redemption II - Personnages</title>
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

    include ('../../php/connexion.php');
    $code = $_GET["id"];

    $req = $bdd->prepare("SELECT * FROM personnages WHERE code_perso=?");
    $req->execute([$code]);
    $perso = $req->fetch();
    $nom = $perso['nom_perso'];
    $resume = $perso['resume_perso'];
    $histoire = $perso['histoire_perso'];
    $naissance = $perso['naissance_perso'];
    $deces = $perso['deces_perso'];
    $statut = $perso['statut_perso'];
    $id_statut_perso = $perso['id_statut_perso'];
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
            <div class="col-8" id="text" style="border:30px solid transparent">
                <p class="text-center" id="text">
                <h1><?php echo $nom; ?></h1>
                <?php echo $resume; ?>
                </p>
                <p class="text-center" id="text">
                <h1>Histoire</h1>
                <?php echo $histoire; ?>
                </p>
            </div>
            <!-- Content Centre -->
            <!-- Content Droit -->
            <!-- Content Droit -->
            <div class="col-4" style="border:30px solid transparent">
                <!-- top -->
                <p id="index_content_droite_paragraphe"><img src="<?php echo $photo; ?>"
                        style="border:30px solid transparent;  max-width: 90%; max-height: 90%;" /></p>
                <!-- top -->
                <hr />
                <!-- middle -->
                <p class="text-center" id="text" style="border:15px solid transparent;">
                    Naissance - 
                    <?php
                    if ($naissance!=NULL) {
                        echo $naissance;
                    }else {
                        echo "Inconnue";
                    }; 
                    ?></br>
                    Statut - <?php echo "<a href=\"pages/catégorie/affiche_categ_statut.php?id=",$id_statut_perso."\">"; echo $statut; ?></a></br>
                    Décès - 
                    <?php
                    if ($deces!=NULL) {
                        echo $deces;
                    }else {
                        echo "Inconnue";
                    }; 
                    ?></br>
                    Sexe - <?php echo $sexe; ?></br>
                    Nationalité - <?php echo $nationalite; ?></br>
                    Occupation - <?php echo $occupation; ?></br>
                    Rôles - <?php echo "<a href=\"pages/catégorie/affiche_categ_role.php?id=",$id_role."\">"; echo $role; ?></a></br>
                </p>
                <!-- middle -->
                <hr />
                <!-- bottom -->
                <p class="text-center" id="text" style="border:15px solid transparent;">
                    Anecdote</br>
                    <?php echo $resume; ?>
                </p>
                <!-- bottom -->
            </div>
            <!-- Content Droit -->
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