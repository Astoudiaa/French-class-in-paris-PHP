<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars(trim($_POST["fullname"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPDebug = 2; 
        $mail->Host       = 'ssl0.ovh.net';          // Ton serveur SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contact@frenchclassinparis.com';
        $mail->Password   = 'Kerazan30?!';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->setFrom($email, $fullname);
        $mail->addAddress('contact@frenchclassinparis.com');  

        $mail->isHTML(false);
        $mail->Subject = "Nouveau message de contact : $subject";
        $mail->Body    = "
Nom : $fullname
Email : $email
Telephone : $phone
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
}


