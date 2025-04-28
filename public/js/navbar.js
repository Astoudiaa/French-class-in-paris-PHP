window.addEventListener("scroll", function() {
  const navbar = document.getElementById("navigation");
  if (window.scrollY > 50) {
      navbar.classList.add("scrolled"); // Ajoute la classe au scroll
  } else {
      navbar.classList.remove("scrolled"); // Retire la classe en haut de page
  }
});

document.addEventListener("DOMContentLoaded", function () {
    // Gestion de la navigation et du fond héro
    const nav = document.getElementById("navigation");
    const heroBg = document.querySelector(".hero-bg");
    
    if (heroBg) {
        window.addEventListener("scroll", function () {
            let scrollValue = window.scrollY;
            // Effet de déplacement de l'image
            heroBg.style.transform = `translateY(${scrollValue * 0.5}px)`;
            
            // Modification de la navbar au scroll
            if (scrollValue > 50) {
                nav && nav.classList.add("scrolled");
            } else {
                nav && nav.classList.remove("scrolled");
            }
        });
    }
    
    // Gestion du sélecteur de langue
    const currentLanguageElement = document.querySelector('.current-language');
    const languageDropdown = document.querySelector('.language-dropdown');
    
    if (currentLanguageElement && languageDropdown) {
        // Afficher/masquer le menu déroulant quand on clique sur le sélecteur actuel
        currentLanguageElement.addEventListener('click', function(e) {
            console.log('Clic sur le sélecteur de langue');
            e.stopPropagation(); // Empêche la propagation du clic
            languageDropdown.classList.toggle('show');
        });
        
        // Fermer le menu si on clique ailleurs
        document.addEventListener('click', function() {
            languageDropdown.classList.remove('show');
        });
        
        // Empêcher la fermeture quand on clique sur le menu déroulant
        languageDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        // Gérer les clics sur les options de langue
        const languageOptions = document.querySelectorAll('.language-option');
        const currentFlagElement = document.getElementById('current-flag');
        
        languageOptions.forEach(option => {
            option.addEventListener('click', function(e) {
                // Pas besoin de preventDefault car on veut que le lien fonctionne
                
                // Mettre à jour le drapeau actuel (optionnel)
                if (currentFlagElement) {
                    const flag = this.getAttribute('data-flag');
                    currentFlagElement.textContent = flag;
                }
            });
        });
    }
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
