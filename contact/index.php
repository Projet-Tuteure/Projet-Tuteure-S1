<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$form_filed = isset($_POST['mailbody']) && isset($_POST['mailsubject']);
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
<html>
<head>
    <title>Contact form</title>
</head>
<body>
    <?php if(isset($debugmsg)){?>
        <div class="contactdebug"> <?php echo $debugmsg; ?></div>
    <?php } ?>
    <form action="" method="post">
        <input type="text" name="mailsubject" placeholder="Subject">
        <input type="text" name="mailbody" placeholder="Mail Body">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>