<!DOCTYPE html>
<html lang="fr">
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
                <!-- <img src="/assets/img/Dalila-profil.jpeg" alt="Vue de Paris avec la Tour Eiffel" class="photo"> -->
           <p>Je m'appelle Dalila, fondatrice de French Class in Paris et professeure diplômée du Diplôme d’Aptitude à l’Enseignement du Français Langue Etrangère (de Alliance Française de Paris). Depuis plus de 10 ans, j’accompagne des apprenants du monde entier dans l’apprentissage du français — pas à travers des manuels rigides, mais avec une approche humaine, sur-mesure et profondément vivante.</p>
           </div>

            <div class="presentation">
                <p> Mon parcours m’a menée à enseigner à des profils très variés : expatriés, diplomates, professionnels en mobilité, candidats à des examens officiels, ou encore amoureux de la langue française. Ma pédagogie est née d’une conviction simple : le français ne s’enseigne pas, il se transmet, il se vit. Mon rôle n’est pas de faire réciter des règles, mais de vous aider à vous exprimer avec aisance, naturel et plaisir.Avec moi, pas de cours académiques standardisés, mais des sessions construites autour de vous, vos besoins, votre rythme, vos objectifs — qu’ils soient personnels, professionnels, ou académiques.</p>
            </div>

            <div class="photo-container">
             <!--     <img src="/assets/img/salleclasse.jpeg" alt="salle classe" class="photo-classe"> --> 
            </div>
            
            <div class="parcours">
            <p> Mon objectif : vous faire passer du stade "d’apprenant" à celui de personne qui pense, parle et vit en français avec confiance.</p>
   </div>
           
            <div class="parcours-pro">
            <strong> Ce qui me distingue? </strong> <UL>
            <li>Une pédagogie élégante, bienveillante, pragmatique et personnalisée</li> 
            <li> Un apprentissage ancré dans le réel et la culture française</li> 
            <li>Une solide expertise dans la préparation aux examens officiels (DELF, TCF, TEF)</li> 
            <li> Et surtout…une grande dose d’écoute, de passion et d’intuition.</li>      </UL>
            </div>

            <div class="parcours-perso-bis">
            <p> Et au-delà de l’enseignement...
            Je suis Chevalière des Palmes Académiques de l’éducation nationale récompensant 20 ans de carrière au sein de l’Institut de France. Je suis aussi auteure, boxeuse en anglaise depuis 10 ans, marathonienne et grande voyageuse. J’aime les défis, le mouvement, les mots bien choisis — et je crois profondément qu’on enseigne comme on est : avec passion, exigence, humour, et une touche de poésie. </p>
        </div>

        <div class="parcourss">
        <p>Bienvenue dans une autre manière d’apprendre. 
Bienvenue à French Class in Paris. 🌿</p> 
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



  /* Additional JS needed for mobile menu toggle */
  
  
  document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.navigation');
    const body = document.body;
    
    // Create overlay element
    const overlay = document.createElement('div');
    overlay.className = 'overlay';
    body.appendChild(overlay);
    
    menuToggle.addEventListener('click', function() {
      menuToggle.classList.toggle('active');
      navigation.classList.toggle('active');
      overlay.classList.toggle('active');
      body.classList.toggle('no-scroll');
    });
    
    // Close menu when clicking on overlay
    overlay.addEventListener('click', function() {
      menuToggle.classList.remove('active');
      navigation.classList.remove('active');
      overlay.classList.remove('active');
      body.classList.remove('no-scroll');
    });
    
    // Close menu when clicking on navigation links
    const navLinks = document.querySelectorAll('.navigation a');
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        menuToggle.classList.remove('active');
        navigation.classList.remove('active');
        overlay.classList.remove('active');
        body.classList.remove('no-scroll');
      });
    });
  });
  
  document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.querySelector('.menu-toggle');
  const navigation = document.querySelector('.navigation');
  const body = document.body;
  
  // Create overlay element
  const overlay = document.createElement('div');
  overlay.className = 'overlay';
  body.appendChild(overlay);
  
  menuToggle.addEventListener('click', function() {
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
    overlay.classList.toggle('active');
    body.classList.toggle('no-scroll');
  });
  
  // Close menu when clicking on overlay
  overlay.addEventListener('click', function() {
    menuToggle.classList.remove('active');
    navigation.classList.remove('active');
    overlay.classList.remove('active');
    body.classList.remove('no-scroll');
  });
  
  // Close menu when clicking on navigation links
  const navLinks = document.querySelectorAll('.navigation a');
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      menuToggle.classList.remove('active');
      navigation.classList.remove('active');
      overlay.classList.remove('active');
      body.classList.remove('no-scroll');
    });
  });
});
    </script>


</body>
</html>
