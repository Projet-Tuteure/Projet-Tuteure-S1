<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

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
        <form action="#" method="post">
          <div class="form-group">
            <label>Sujet</label>
            <input type="text" class="form-control" placeholder="Sujet" name="mailsubject" required="">
            <small id="emailHelp" class="form-text text-muted">Choisissez un sujet clair</small>
          </div>
          <div class="form-group">
            <label>Corps</label>
            <textarea class="form-control" placeholder="Corps du message" name="mailbody" required="" rows="5"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>
    </div>
