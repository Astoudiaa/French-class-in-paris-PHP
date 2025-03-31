<header>
<link rel="stylesheet" href="public/css/header.css">
    <div class="logo">
      
    <img src="/public/logo FCIP.Jpeg" alt="Logo Dalila Raposo">
<!-- Menu de navigation -->
<nav class="navigation" id="navigation">
<a href="/html2/home.php">
  <a href="/html2/about.php" <%= page === 'propos' ? 'class="active"' : '' %>À propos de moi 
  <a href="/html2/services.php" <%= page === 'services' ? 'class="active"' : '' %>Réalisations
  <a href="/html2/ralisations.php">Services</a>
  <a href="/html2/experiences.php" <%= page === 'experiences' ? 'class="active"' : '' %>Expérience unique
  <a href="/html2/contact.php" <%= page === 'contact' ? 'class="active"' : '' %>Contact
  <a href="/petit-dejeuner" <%= page === 'petit-dejeuner' ? 'class="active"' : '' %></a>
  <a href="/cours-individuel" <%= page === 'cours-individuel' ? 'class="active"' : '' %></a>
</nav>


  
    <!-- Menu burger -->
    <div class="menu-toggle" id="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>

  </header>
  
  

  