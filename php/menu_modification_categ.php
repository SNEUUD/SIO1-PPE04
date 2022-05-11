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
  ?>
  <!-- Navbar -->
  <!-- Content -->
  <div class="px-5 pt-3 pb-3">
    <div class="row" id="content">
      <!-- Content Centre -->
      <div class="col-2" style="border:30px solid transparent">
        <?php
        
        include ("connexion.php");

        $req = $bdd->prepare("SELECT * FROM categories");
        $req->execute();
        $categs = $req->fetchAll();
        
        $n=0;

        foreach ($categs as $categ){
          $code_categ = $categ["code_categ"];
          $nom_categ = $categ["nom_categ"];
          $description_categ = $categ["description_categ"];
          
          if ($n==2) {
            echo
            "</div>
            <div class=\"col-2\" style=\"border:30px solid transparent\">";
            $n=0;
          }

          echo
          "<div class=\"card text-white bg-dark\" style=\"width: 18rem;\">
          <a href=\"php/modifications_categ.php?id=",$categ["code_categ"]."\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">$nom_categ</h5>
            <p class=\"card-text\">$description_categ</p>
            </div>
          </a>
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
        <p id="index_content_droite_paragraphe"><img src="images/index_img_navbar.png"
            style="border:30px solid transparent;  max-width: 90%; max-height: 90%;" /></p>
        <!-- top -->
        <hr />
        <!-- middle -->
        <p class="text-center" id="text" style="border:15px solid transparent;">
          Menu des modifications.
        </p>
        <!-- middle -->
        <hr />
        <!-- bottom -->
        <p class="text-center" id="text" style="border:15px solid transparent;">
        Bonjour <?php echo $_SESSION['user']; ?>,  
        sélectionner le catégorie que vous souhaiter modifier.
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