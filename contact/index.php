<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$form_filed = isset($_POST['mailbody']) && isset($_POST['mailsubject']) && !empty($_POST['mailbody']) && !empty($_POST['mailsubject']);
if($form_filed){

  $mail = new PHPMailer(true);

  $mail->isSMTP();

  $mail->SMTPAuth = true;

  $mail->Host = 'smtp.mailtrap.io';

  $mail->Username = '81528f312ff2d2';

  $mail->Password = '5035f518c6c1e5';

  $mail->Port = 2525;

  $mail->SMTPSecure = 'tls';

  $mail->setFrom('info@mailtrap.io', 'Mailtrap');

  $mail->addReplyTo('info@mailtrap.io', 'Mailtrap');

  $mail->addAddress('recipient1@mailtrap.io', 'Tim');

  $mail->isHTML(true);

  $mail->Subject = $_POST['mailsubject'];

  $mail->Body = $_POST['mailbody'];

  if($mail->send()){
    $debugmsg = "Message envoyé !";
  }else{
    $debugmsg = "Erreur interne : Impossible d'envoyer le message...";
  }
}

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr" class="h-100">
  <head>
    <meta charset="utf-8">
    <title>La Bourse</title>

    <!-- Feuilles de styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

  </head>

  <!-- Body -->
  <body class="h-100">
    <div style="height: 300px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-1.41,106.08 C246.89,148.52 248.02,148.52 503.10,110.03 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #000B76;"></path></svg></div>

    <!-- barre de navigation -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <a class="text-white mr-3" href="..">Accueil<span class="sr-only">(current)</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">L'économie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">La technologie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contraintes Juridiques</a>
          </li>
        </ul>
        <a class="btn btn-outline-success" href="/contact/">Contact</a>
      </div>
    </nav>

    <h1 class="w-auto mx-auto mb-5 text-white text-center" style="margin-top: -200px">Contact</h1>


    <!-- Formulaire -->
    <div class="card w-75 mx-auto mb-3">
      <div class="card-body">
        <h3 class="card-title">Une question? Un problème?</h3>
        <h4 class="card-subtitle mb-2 text-muted">Contactez-nous...</h4>
        <?php if(isset($debugmsg)){?>
        <div class="alert alert-primary">
          <?php echo $debugmsg;?>
        </div>
        <?php } ?>
        <form action="" method="post">
          <div class="form-group">
            <label>Sujet</label>
            <input type="text" class="form-control" placeholder="Sujet" name="mailsubject" required="">
            <small id="emailHelp" class="form-text text-muted">Choisissez un sujet clair</small>
          </div>
          <div class="form-group">
            <label>Corps</label>
            <input type="text" class="form-control" placeholder="Corps du message" name="mailbody" required="">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div style="height: 250px; overflow: hidden; margin-top: -75px; position: absolute; bottom:0px;left:0px;right:0px;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C177.48,63.64 301.63,33.05 513.26,-0.48 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #000B76;"></path></svg></div>
  </body>

</html>