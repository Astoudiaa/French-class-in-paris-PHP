<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
// Remplace '../vendor/autoload.php' par './vendor/autoload.php'
// adapte le chemin selon ton projet

  /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars(trim($_POST["fullname"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $mail = new PHPMailer(true); 


    try {
       Configuration SMTP
        $mail->isSMTP();
        $mail->Host       ='smtp.mail.yahoo.com';            // Ton serveur SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'daillarap@yahoo.fr';       // Ton adresse Gmail
        $mail->Password   = 'eesp jame fgoj grhx';       // Mot de passe d'application Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
       $mail->Port       = 587;

        // Expéditeur et destinataire
        $mail->setFrom($email, $fullname);
        $mail->addAddress('daillarap@yahoo.fr'); // Adresse de destination

        // Contenu
        $mail->isHTML(false);
        $mail->Subject = "Nouveau message de contact : $subject";
        $mail->Body    = "
Nom : $fullname
Email : $email
Téléphone : $phone
Sujet : $subject
Message :
$message
        ";

        $mail->send();
        echo "<script>alert('Message envoyé avec succès !'); window.location.href = 'contact.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Erreur lors de l\'envoi : {$mail->ErrorInfo}'); window.location.href = 'contact.php';</script>";
    }
} else {
    header("Location: contact.php");
    exit;
} */


 
$fullname = $_POST['fullname'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone= $_POST['phone'];
$subject= $_POST['subject'];
$to = "astoudiagouraga@gmail.com";
$context = "Mail From Astou";
$txt ="Name = ". $fullname . "\r\n  Email = " . $email . "\r\n Message =" . $message  . "\r\n subject =" . $subject  . "\r\n phone =" . $phone   . "\r\n context =" .  $context; 
$headers = "From: noreply@Youness_ELMO.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$context,$txt,$headers);
}

header("Location:contact.php");
?> 

