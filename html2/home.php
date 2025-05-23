
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dalila RAPOSO - Français Langue étrangère</title>
  <link rel="stylesheet" href="../public/css/home.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Italianno&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Italiana&family=Italianno&display=swap">
</head>

<body>
  <!-- Inclure le header -->
  <?php include('header-home.php'); ?>

  <!-- Section Héro -->
  <section class="hero-section">
    <div class="hero-bg"></div>
    <div class="hero-content">
      <h1 class="hero-title">Apprenez le français à Paris</h1>
      <p class="hero-subtitle">Cours personnalisés et expériences culturelles uniques</p>

    
    </div>
  </section>

  <main>
    <div class="quote-section">
      <div class="quote"> "Ma vocation, votre apprentissage" </div>
      <div class="quote-ligne">"Ma passion, votre progression" </div>
      <div class="author">Dalila Raposo</div>
    </div>

    <div class="gallery">
      <div class="gallery-item">
        <img src="../public/img/Dalila-profil.jpeg" alt="Dalila dans un jardin" class="gallery-image">
        <h3 class="gallery-title"><a href="/about">À propos de moi</a></h3>
        <button class="detail-button"><a href="/about">En savoir plus→</a></button>
      </div>

      <div class="gallery-item">
        <img src="../public/img/cours-individuel.jpeg" alt="cours individuel" class="gallery-image">
        <h3 class="gallery-title"><a href="/services">Cours personnalisés</a></h3>
        <button class="detail-button"><a href="/services">En savoir plus→</a></button>
      </div>

      <div class="gallery-item">
        <img src="../public/img/cours-petit-dejeuner.jpeg" alt="Session d'apprentissage" class="gallery-image" id="img">
        <h3 class="gallery-title"><a href="/experiences">Expériences culturelles</a></h3>
        <button class="detail-button"><a href="/experiences">En savoir plus→</a></button>
      </div>
    </div>
  </main>
</div>
    
  <!-- Inclure le footer -->
  <?php include 'footer.php'; ?>


  <script src="../public/js/home.js"></script>
  <script src="../public/js/navbar.js"></script>
</body>
</html>