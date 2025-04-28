<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours de Français</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/public/css/modeles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Italianno&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Italiana&family=Italianno&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
<div class="main-content">
<?php include 'header.php'; ?>
<section class="realisations">
        <div class="container">
        <div class="subtitle-container">
         <p class="subtitle"><strong>Apprendre le français</strong>  est bien plus qu’un simple exercice linguistique : c’est une porte ouverte sur une culture, une élégance et une aisance qui vous permettront d’évoluer avec confiance dans un environnement francophone.</p> 
         <p class="subtitle"><strong>Mon engagement</strong>  est de vous offrir un enseignement de qualité, allié à une grande flexibilité. Que ce soit en ligne ou en présentiel, nous adaptons ensemble le format et les horaires pour répondre à vos exigences.</p>
         <p class="subtitle"><strong> Maîtriser le français</strong>  avec aisance et distinction, c’est possible. Ensemble, faisons de votre apprentissage une réussite aussi fluide qu’enrichissante. N’hésitez pas à me contacter afin de définir ensemble le programme qui vous correspond.
</p>

    <div class="container">
        <div class="courses-container">
            <!-- Cours en présentiel -->
            <div class="course-card">
                <div class="course-header">
                    <i class="fa fa-graduation-cap"></i>
                    <h2>Cours en présentiel</h2>
                </div>
                <div class="course-image">
                    <img src="/public/img/cours-individuel.jpeg" alt="Cours en présentiel">
                </div>
                <div class="course-content">
                    <p>Progressez rapidement avec nos cours de français personnalisés.</p>
                    <ul class="feature-list">
                        <!--  <li><i class="fa fa-clock"></i> Séances de 1h30 à 2h adaptées à votre niveau</li>
                        <li><i class="fa fa-users"></i> Cours particuliers ou en petit groupe (max. 4 personnes)</li>
                        <li><i class="fa fa-star"></i> Méthode interactive et personnalisée selon vos objectifs</li>
                    </ul>-->

                    <button class="cta-button" onclick="window.location.href= '/html2/cour-presentiel.php'">Réserver un cours</button>
                </div>
            </div>

            <!-- Cours en ligne -->
            <div class="course-card">
                <div class="course-header">
                    <i class="fa fa-globe"></i>
                    <h2>Cours en ligne</h2>
                </div>
                <div class="course-image">
                    <img src="/public/img/ligne-dalila.jpeg" alt="Cours en ligne">
                </div>
                <div class="course-content">
                    <p>Apprenez le français depuis chez vous avec la même qualité d'enseignement que nos cours en présentiel.</p>
                    <ul class="feature-list">
                         <!--  <li><i class="fa fa-tablet"></i> Support de cours numériques interactifs</li>
                        <li><i class="fa fa-comments"></i> Exercices pratiques et conversations en direct</li>
                        <li><i class="fa fa-chart-line"></i> Suivi personnalisé de vos progrès</li> -->
                    </ul>
                    <button class="cta-button" onclick="window.location.href= '/html2/cour-ligne.php'">Commencer en ligne</button>
                </div>
            </div>
        </div>
    </div>


    <section id="pourquoi" class="pourquoi">
        <div class="container">
            <h2>Pourquoi choisir nos cours particuliers ?</h2>
        
            <div class="avantages">
                <div class="avantage-item">
                    <i class="fas fa-user-graduate"></i>
                    <h3>Personnalisation</h3>
                    <p>Programme adapté à vos objectifs spécifiques et à votre rythme d'apprentissage</p>
                </div>
            
                <div class="avantage-item">
                    <i class="fas fa-comment-dots"></i>
                    <h3>Pratique intensive</h3>
                    <p>Temps de parole maximisé pour une progression rapide de vos compétences orales</p>
                </div>
            
                <div class="avantage-item">
                    <i class="fas fa-clock"></i>
                    <h3>Flexibilité</h3>
                    <p>Horaires adaptés à vos disponibilités, en présentiel ou à distance</p>
                </div>
            </div>
        </div>
        </div>
  

        <a href="/html2/reservation.php" class="btn-gold">Réserver</a>
    </section>
      <!-- Inclure le footer -->
      <?php include 'footer.php'; ?>
    
    <script src="../public/js/cours.js"></script>
    <script src="../public/js/navbar.js"></script>

</body>
</html>