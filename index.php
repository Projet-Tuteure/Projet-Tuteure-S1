<?php
if (!isset($_GET["path"])) {
  $_GET["path"] = "pages/accueil.php";
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr" class="h-100">
  <head>
    <meta charset="utf-8">
    <title>La Bourse</title>

     <meta content='initial-scale=1.0, width=device-width' name='viewport'>

    <!-- Feuilles de styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="h-100">
    <!-- barre de navigation -->
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="text-white mr-3" href="index.php?path=pages/accueil.php">Accueil<span class="sr-only">(current)</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?path=pages/economie.php">L'économie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?path=pages/fonctionnel.php">La technologie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?path=pages/juridique.php">Contraintes Juridiques</a>
          </li>
        </ul>
        <a class="btn btn-outline-light" href="index.php?path=pages/contact.php">Contact</a>
      </div>
    </nav>
    <div style="height: 250px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-18.34,153.45 C154.91,117.92 326.46,117.92 520.03,152.45 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #007bff;"></path></svg></div>

<!-- PAGE CONTENT -->

<?php include $_GET["path"]; ?>

<!-- PAGE CONTENT -->

    <div style="height: 300px; overflow: hidden; margin-top: -75px;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-0.84,43.91 C158.29,42.92 231.65,38.97 502.54,0.50 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #007bff;"></path></svg></div>
    <footer style="margin-top: -150px; display: flex; flex-direction: row;">
      <div class="logo_iut">
        <img src="assets/logo_iut.png" alt="">
      </div>
      <div class="logo_text" style="margin-left: 15px; height: auto; margin-top: auto; margin-bottom: auto;">
        <p style="font-size: 20px;"><span style="color: lightgreen; font-weight: bold; font-size: 30px;">IUT</span><br>Belfort-<br>Montbéliard</p>
      </div>
    </footer>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/skrollr.js"></script>
    <script type="text/javascript">
      var s = skrollr.init();
      // if (s.isMobile()) {
      //   s.destroy();
      // }
    </script>
  </body>
</html>
