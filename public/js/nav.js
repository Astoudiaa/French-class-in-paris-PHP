document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const navigation = document.getElementById('navigation');
    
    if (!menuToggle || !navigation) {
      console.error("Menu toggle or navigation elements not found!");
      return;
    }
    
    menuToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      menuToggle.classList.toggle('active');
      navigation.classList.toggle('active');
      console.log("Menu toggle clicked");
    });
    
    // Fermer le menu en cliquant en dehors
    document.addEventListener('click', function(e) {
      if (navigation.classList.contains('active') && 
          !navigation.contains(e.target) && 
          !menuToggle.contains(e.target)) {
        
        menuToggle.classList.remove('active');
        navigation.classList.remove('active');
      }
    });
    
    // Empêcher la propagation du clic depuis la navigation
    navigation.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  });