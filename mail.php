<?php
require_once('class.phpmailer.php');
			
                $sujet=$_POST['sujet'];

                //body
                $message="<font color=\'green\'>";
                $message .=$_POST['name'];
				$message .="</font>";
                $message .="<br/>";
                $message .=$_POST['email'];
                $message .="<br/>";
                $message .=$_POST['message'];
                //body-end

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "mulemail.babook@gmail.com";
$mail->Password = "fuckyou974";
$mail->SetFrom("mulemail.babook@gmail.com");
$mail->Subject = $sujet;
$mail->Body = $message;
$mail->AddAddress("aho.benji@gmail.com");


if(!$mail->Send())
{
  echo "échec de l'envoi du message" . $mail->ErrorInfo;
    header("Refresh:0; url=index.html");
}
else
{
  echo "message envoyé avec succès";
    header("Refresh:0; url=index.html");
}

if (isset($_POST['submit']))
   {
       #TRAITEMENT DE TON FORMULAIRE VALIDE
      $alerte = "Votre message a bien été envoyé";

      #TRAITEMENT DE TON FORMULAIRE NON VALIDE
      $alerte = "Echec de l'envoi";
   }
?>
