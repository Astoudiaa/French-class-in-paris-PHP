window.addEventListener("scroll", function() {
  const navbar = document.getElementById("navigation");
  if (window.scrollY > 50) {
      navbar.classList.add("scrolled"); // Ajoute la classe au scroll
  } else {
      navbar.classList.remove("scrolled"); // Retire la classe en haut de page
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const nav = document.getElementById("navigation");
  const heroBg = document.querySelector(".hero-bg");

  window.addEventListener("scroll", function () {
      let scrollValue = window.scrollY;

      // Effet de déplacement de l'image
      heroBg.style.transform = `translateY(${scrollValue * 0.5}px)`;

      // Modification de la navbar au scroll
      if (scrollValue > 50) {
          nav.classList.add("scrolled");
      } else {
          nav.classList.remove("scrolled");
      }
  });
});

// Sélectionner le bouton burger et le menu
const menuToggle = document.getElementById('menu-toggle');
const navigation = document.getElementById('navigation');

// Ajouter un événement de clic pour afficher/masquer le menu
menuToggle.addEventListener('click', () => {
    navigation.classList.toggle('active');
});



menuToggle.addEventListener('click', () => {
    navigation.classList.toggle('responsive');
});
/* Additional JavaScript needed for mobile menu toggle */
 
document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.querySelector('.menu-toggle');
  const navigation = document.querySelector('.navigation');
  
  menuToggle.addEventListener('click', function() {
    navigation.classList.toggle('active');
    
    // Optional: animate the menu toggle
    const spans = menuToggle.querySelectorAll('span');
    spans.forEach(span => span.classList.toggle('active'));
  });
  
  // Close menu when clicking outside
  document.addEventListener('click', function(event) {
    if (!navigation.contains(event.target) && !menuToggle.contains(event.target) && navigation.classList.contains('active')) {
      navigation.classList.remove('active');
      
      // Reset menu toggle animation
      const spans = menuToggle.querySelectorAll('span');
      spans.forEach(span => span.classList.remove('active'));
    }
  });
});
