<header>
<div class="header">
<div class="branding">
    <div class="logo">
            
 <img src="/public/img/logo-transparent.png" alt="Logo Dalila Raposo"> 
 </div>
    <div class="name">
            <h1>French class in Paris</h1>
        </div>
        </div>
  
 
<!-- Menu de navigation -->
<nav class="navigation" id="navigation">
<a href="/html2/home.php">
  <a href="/html2/about.php" <%= page === 'propos' ? 'class="active"' : '' %>À propos de moi 
  <a href="/html2/services.php" <%= page === 'services' ? 'class="active"' : '' %>Cours personnalisés
  <a href="/html2/experiences.php" <%= page === 'experiences' ? 'class="active"' : '' %>Expériences culturelles
  <a href="/html2/realisations.php">Réalisations</a>
  <a href="/html2/contact.php" <%= page === 'contact' ? 'class="active"' : '' %>Contact
  <a href="/petit-dejeuner" <%= page === 'petit-dejeuner' ? 'class="active"' : '' %></a>
  <a href="/cours-individuel" <%= page === 'cours-individuel' ? 'class="active"' : '' %></a>
<button class="hero-button" onclick="window.location.href='/html2/reservation.php'">Réserver</button>
</nav>



  
    <!-- Menu burger -->
    <div class="menu-toggle" id="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>


    
    <script src="/js/navbar.js"></script> <!-- Inclure le script JS -->
    </header>

  