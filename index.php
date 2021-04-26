<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous"> -->
    <title>InstitutBeauté</title>
  </head>
  <body>
    <header>
      <h1>Ma beauté</h1>
      <nav>
        <a href="index.php">Accueil</a>
        <a href="templates/microblading.php">Microblading</a>
        <a href="templates/cils.php">Cils</a>
        <a href="templates/sourir.php">Blanchiment dentaire</a>
        <a href="templates/bbglow.php">BB Glow</a>
        <a href="templates/contactform.php">Contact</a>
      </nav>
    </header>


      <main>
    
        <!-- <section class='presentation'> -->
          <section class="img">
            <div class="img1">
              <img src="img/beaute1.png" alt="beaute">
            </div>
            <div class="img2">
              <img src="img/beaute3.png" alt="beaute">
            </div>
            <div class="img3">
              <img src="img/beaute4.png" alt="beaute">
            </div>

          </section>
          <section class="message">
            <!-- <?php include ('php/contact.php')?> -->

          </section>
          <section class="text1">
              <div class="linstitut">
            <h2> Présentation </h2>
            <p>Passionées et diplomées d'esthetique nous proposons différentes prestations beauté.</p>
            <p> Des produits et des prestations de qualité qui respectent votre corps, des produits validés par des experts ainsi que des medecins pour être au top de soit sans négliger
              notre réelle bien-être, notre santé.</p>
          </div>
          <div class="lesservices">
            <div class="regard"><h3>La beauté du regard <i class="fas fa-caret-down"></i></h3></div>
            <div class="submenu">
              <ul>
                <li><a href="templates/microblading.php">Microblading</a></li>
                <li><a href="templates/cils.php">Les cils</a></li>
              </ul>
            </div>
              <p> En passant de la beauté des sourcils, à celles des cils avec nos extentions de très bonne qualité et longue tenue.</p>
              <a href="templates/sourir.php"><h3>Le sourir</h3></a>
              <p>Le blanchiment des dents avec les dernieres technologies de pointe validées par les dentistes. </p>
              <a href="templates/bbglow.php"><h3>La peau</h3></a>
              <p>Le soin BB Glow est une innovation exclusive en France, offrant une alternative au fond de teint.
                La  technique BB Glow est un traitement de la peau effectué à l’aide d’un dermopen qui réduit l’apparence des taches de rousseur,
                réduit la teneur en mélanine procure une hydratation instantanée, restaure le teint et permet de donner une couleur uniforme aux
                visages. Cette technique est également idéale pour camoufler les vergetures.</p>
          </div>
        </section>
      </main>

  <?php include('templates/footer.php') ?>

  <script>
    var leregard = document.querySelector('.regard');
    var menuregard = document.querySelector('.submenu');

    leregard.addEventListener('click', display);

    function display() {
      menuregard.classList.toggle('show');
    }
  </script>
