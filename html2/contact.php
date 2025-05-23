<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>French Class in Paris - Dalila RAPOSO</title>
    <link rel="stylesheet" href="../public/css/contact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Italianno&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Italiana&family=Italianno&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>

    <div class="container">
        <h1>Contactez-nous</h1>
        <p class="subtitle">Nous sommes à votre écoute pour toute question concernant nos cours de français et nos expériences culturelles</p>
        <div class="content-wrapper">
            <div class="contact-form">
                <h2>Envoyez-nous un message</h2>
                <form method="POST" action="/html2/send-mail.php">
                    <div class="form-group">
                        <input type="text" id="fullname" name="fullname" placeholder="Nom complet" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" placeholder="Téléphone">
                    </div>
                    <div class="form-group">
                        <select id="subject" name="subject" required>
                            <option value="">Sélectionnez un objet</option>
                            <option value="cours">Cours de français</option>
                            <option value="experience">Expériences culturelles</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Envoyer le message</button>
                </form>
            </div>
            
            <div class="contact-info">
                <h2>Informations de contact</h2>
                <div class="info-item">
                    <span class="icon">📞</span>
                    <span>Téléphone</span>
                    <p>06 23 61 07 22</p>
                </div>
                <div class="info-item">
                    <span class="icon">✉️</span>
                    <span>Email</span>
                    <p>contact@frenchclassinparis.com</p>
                </div>
                <div class="info-item">
                    <span class="icon">🕒</span>
                    <span>Horaires</span>
                    <p>Du lundi au samedi<br>9h00 - 20h00</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclure le footer -->
    <?php include 'footer.php'; ?>

    <script src="../public/js/navbar.js"></script>
</body>
</html>
