<html>

<head>
  <meta charset="utf-8" />
  <title>PPE04 - Red Dead Redemption II - Personnages</title>
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
  <!-- Content -->
  <div class="px-5 pt-3 pb-3">
    <div class="row" id="content">
      <!-- Content Centre -->
      <div class="col-2" style="border:30px solid transparent">
        <?php
        
        include ("../php/connexion.php");

        $req = $bdd->prepare("SELECT * FROM personnages");
        $req->execute();
        $personnages = $req->fetchAll();
        
        $n=0;

        foreach ($personnages as $personnage){
          $nom_perso = $personnage["nom_perso"];
          $resume_perso = $personnage["resume_perso"];
          $image_perso = $personnage["image_perso"];
          $lien_perso = $personnage["lien_perso"];
          
          if ($n==2) {
            echo
            "</div>
            <div class=\"col-2\" style=\"border:30px solid transparent\">";
            $n=0;
          }

          echo
          "<div class=\"card text-white bg-dark\" style=\"width: 18rem;\">
          <a href=\"$lien_perso\">
            <img src=\"$image_perso\" class=\"card-img-top\" alt=\"Arthur Morgan\">
          </a>
          <div class=\"card-body\">
            <h5 class=\"card-title\">$nom_perso</h5>
            <p class=\"card-text\">$resume_perso</p>
            </div>
          </div>
          <br>";

          $n++;
        }
        ?>
      </div>
      <!-- Content Centre -->
      <!-- Content Droit -->
      <div class="col-4" style="border:30px solid transparent">
        <!-- top -->
        <p id="index_content_droite_paragraphe"><img src="images/bande-de-van-der-linde-m.jpg"
            style="border:30px solid transparent;  max-width: 90%; max-height: 90%;" /></p>
        <!-- top -->
        <hr />
        <!-- middle -->
        <p class="text-center" id="text" style="border:15px solid transparent;">
          L'histoire de Red Dead Redemption 2 est centrée autour de la bande de Van der Linde. C'est un groupe de
          hors-la-loi, de renégats et de marginaux avec à leur tête le charismatique Dutch van der Linde. Après avoir
          longtemps vécu au-dessus des lois, ils craignent désormais d'avoir à le payer.
        </p>
        <!-- middle -->
        <hr />
        <!-- bottom -->
        <p class="text-center" id="text" style="border:15px solid transparent;">
          « Si nous devons nous battre, nous nous battons. Si nous devons courir, nous courrons. Si nous devons mourir,
          nous mourrons. Mais … nous resterons libres. » – Javier Escuella
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