function changeImage(img) {
    img.src = '/img/cours-gouter.jpeg';  // Change l'image au survol
  }
  
  function restoreImage(img) {
    img.src = '/img/Dalila.jpeg';  // Restaure l'image d'origine lorsque la souris part
  }


  let images = ['/public/img/cours-gouter.jpeg', '/public/img/cathedrale.jpeg','/public/img/cours-petit-dejeuner.jpeg',];  // Liste des images
let currentImageIndex = 0;  // L'index de l'image actuelle

// Fonction pour changer l'image toutes les 1,5 secondes
setInterval(function() {
  currentImageIndex = (currentImageIndex + 1) % images.length;  // Change d'image (cycle)
  document.getElementById('img').src = images[currentImageIndex];  // Met à jour l'image
}, 1500);  // 1500 millisecondes = 1,5 secondes


