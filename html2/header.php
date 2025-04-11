
<header>
    <div class="header">
        <div class="logo">
          <!--  <img src="/assets/img/logoFCIP.Jpeg" alt="Dalila RAPOSO - Français Langue étrangère - Ma vocation, votre apprentissage">-->
        </div>
        <div class="name">
            <h1>French class in Paris</h1>
        </div>
        
        <nav class="navigation" id="navigation">
<a href="/html2/home.php">Accueil</a>
  <a href="/html2/about.php">À propos de moi</a>
  <a href="/html2/modeles.php">Cours personnalisés </a>
  <!--  <a href="/html2/services.php">modeles</a >-->
   <!-- <a href="/html2/page.php">Pages</a>-->
  <a href="/html2/experiences.php" >Expériences culturelles</a>
  <a href="/html2/realisations.php">Réalisations</a>
  <!-- <a href="/html2/page.php">pages</a>-->
  <a href="/html2/contact.php" <%= page === 'contact' ? 'class="active"' : '' %>Contact
  <a href="/petit-dejeuner" <%= page === 'petit-dejeuner' ? 'class="active"' : '' %></a>
  <a href="/cours-individuel" <%= page === 'cours-individuel' ? 'class="active"' : '' %></a>
          <!-- Bouton Réserver à droite -->
          <button class="reserve-button" onclick="window.location.href='/reservation'">Réserver</button>

</nav>


     <!-- Menu burger -->
     <div class="menu-toggle" id="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
  
      <script src="/js/navbar.js"></script> <!-- Inclure le script JS -->
    </header>
    