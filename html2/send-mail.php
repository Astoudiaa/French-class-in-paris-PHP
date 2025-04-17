<?php
// Vérifie que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et nettoyage des données
    $fullname = htmlspecialchars(trim($_POST["fullname"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Destinataire
    $to = "daillarap@yahoo.fr";  // Change si tu veux un autre email de destination

    // Sujet de l'email
    $email_subject = "Nouveau message de contact : $subject";

    // Corps de l'email
    $email_body = "
    Vous avez reçu un nouveau message via le formulaire de contact :

    Nom complet : $fullname
    Email : $email
    Téléphone : $phone
    Sujet : $subject
    Message :
    $message
    ";

    // En-têtes
    $headers = "From: $fullname <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l'email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Message envoyé avec succès !'); window.location.href = 'contact.php';</script>";
    } else {
        echo "<script>alert('Une erreur est survenue lors de l\'envoi.'); window.location.href = 'contact.php';</script>";
    }
} else {
    // Si on accède à ce fichier sans soumettre le formulaire
    header("Location: contact.php");
    exit;
}
?>