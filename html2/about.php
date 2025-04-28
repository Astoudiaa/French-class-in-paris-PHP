<?php
require_once __DIR__ . '/../language.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $currentLang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>French Class in Paris - Dalila RAPOSO</title>
    <link rel="stylesheet" href="../public/css/propos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Italianno&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Italiana&family=Italianno&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Inclure le header -->
    <?php include 'header.php'; ?>
    
    
    <main>
        <div class="text">
        
            <h2 class="text-propos">Enseignante de Français langue étrangère passionnée et engagée...</h2>
        </div>
        
        <div class="fade-in"> 
            <div class="bio">
           <p>Je m'appelle <strong>Dalila</strong>, fondatrice de <i>French Class in Paris</i> et professeure diplômée du <strong>Diplôme d’Aptitude à l’Enseignement du Français Langue Etrangère </strong> (de l'alliance Française de Paris). Depuis plus de 10 ans, j’accompagne des apprenants du monde entier dans l’apprentissage du français — pas à travers des manuels rigides, mais avec une approche <strong>humaine, sur-mesure et profondément vivante </strong>.</p>
           </div>

            <div class="presentation">
                <p> Mon parcours m’a menée à enseigner à des profils très variés : <strong>expatriés, diplomates, professionnels en mobilité, candidats à des examens officiels</strong>, ou encore amoureux de la langue française. Ma pédagogie est née d’une conviction simple : <strong>le français ne s’enseigne pas, il se transmet, il se vit</strong>. Mon rôle n’est pas de faire réciter des règles, mais de vous aider à vous <strong>exprimer avec aisance, naturel et plaisir</strong>.  Avec moi, <strong>pas de cours académiques standardisés</strong>, mais des sessions construites autour de vous, vos besoins, votre rythme, vos objectifs — qu’ils soient personnels, professionnels, ou académiques.</p>
            </div>

    
            <div class="parcours">
            <p> <strong>Mon objectif</strong> : vous faire passer du stade "d’apprenant" à celui de <strong>personne qui pense, parle et vit en français avec confiance</strong>.</p>
   </div>
           
            <div class="parcours-pro">
         Ce qui me distingue?  <UL>
            <li>Une pédagogie élégante, <strong>ienveillante, pragmatique et personnalisée </strong></li> 
            <li> Un apprentissage ancré dans <strong>le réel et la culture française </strong></li> 
            <li>Une solide expertise dans la <strong>préparation aux examens officiels (DELF, TCF, TEF) </strong></li> 
            <li> Et surtout…une grande dose d’écoute, de passion et d’intuition.</li>      </UL>
            </div>

            <div class="parcours-perso-bis">
            <p> Et au-delà de l’enseignement...
            Je suis <strong>Chevalière des Palmes Académiques</strong> de l’éducation nationale récompensant 20 ans de carrière au sein de l’Institut de France. Je suis aussi <strong>auteure, boxeuse en anglaise depuis 10 ans, marathonienne et grande voyageuse</strong>. J’aime les défis, le mouvement, les mots bien choisis — et je crois profondément qu’on enseigne comme on est : avec passion, exigence, humour, et une touche de poésie. </p>
        </div>

        <div class="parcourss">
        <p>Bienvenue dans une autre manière d’apprendre. </p> 
        <p> <i><strong>Bienvenue à French Class in Paris. 🌿</strong></i></p> 
</div>
    </main>
    <!-- Inclure le footer -->
    <?php include 'footer.php'; ?>
    <script>
        // Simple fade-in animation script
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });
            
            fadeElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
<script src="../public/js/navbar.js"></script>

</body>
</html>
