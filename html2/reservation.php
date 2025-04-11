<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Service</title>
    <link rel="stylesheet" href="../public/css/reservation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Italianno&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Italiana&family=Italianno&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <div class="booking-form">
            <!-- Section de choix de service -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-hand-pointer accent-color"></i>
                    Choisissez votre service
                </h2>
                <div class="service-selection">
                    <div class="form-group">
                        <select id="service" name="service" required>
                            <option value="">Sélectionnez un objet</option>
                            <option value="presentiel">Cours de français en présentiel</option>
                            <option value="enligne">Cours de français en ligne</option>

                            <option value="gouter">Cours de français autour d'un goûter</option>
                            <option value="petit-dejeuner">Cours de français autour d'un petit déjeuner</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                </div>

                <!-- Options tarifaires -->
                <div class="tarif-options" id="tarif-presentiel" style="display: none;">
                    <h3>En présentiel à Paris</h3>
                    <div class="tarif-cards">
                        <div class="tarif-card" data-price="60" data-total="60">
                            <h4>1h15</h4>
                            <p class="price">60 €</p>
                        </div>
                        <div class="tarif-card" data-price="57" data-total="570">
                            <h4>Forfait 10 heures (10x1h15)</h4>
                            <p class="price">570 €</p>
                            <p class="price-details">soit 57€ de l'heure et quart</p>
                        </div>
                        <div class="tarif-card" data-price="55" data-total="1100">
                            <h4>Forfait 20 heures (20x1h15)</h4>
                            <p class="price">1100 €</p>
                            <p class="price-details">soit 55€ de l'heure et quart</p>
                        </div>
                    </div>
                </div>

                <div class="tarif-options" id="tarif-enligne" style="display: none;">
                    <h3>En visio (Zoom)</h3>
                    <div class="tarif-cards">
                        <div class="tarif-card" data-price="50" data-total="50">
                            <h4>1h15</h4>
                            <p class="price">50 €</p>
                        </div>
                        <div class="tarif-card" data-price="48" data-total="480">
                            <h4>Forfait 10 heures (10x1h15)</h4>
                            <p class="price">480 €</p>
                            <p class="price-details">soit 48€ de l'heure et quart</p>
                        </div>
                        <div class="tarif-card" data-price="47" data-total="940">
                            <h4>Forfait 20 heures (20x1h15)</h4>
                            <p class="price">940 €</p>
                            <p class="price-details">soit 47€ de l'heure et quart</p>
                        </div>
                    </div>
                </div>

                <div class="tarif-options" id="tarif-groupe-presentiel" style="display: none;">
                    <h3>Cours en petit groupe (3-4 personnes) - En présentiel à Paris</h3>
                    <div class="tarif-cards">
                        <div class="tarif-card" data-price="30" data-total="30" data-per-person="true">
                            <h4>1h15</h4>
                            <p class="price">30 € par personne</p>
                        </div>
                        <div class="tarif-card" data-price="28" data-total="280" data-per-person="true">
                            <h4>Forfait 10 heures (10x1h15)</h4>
                            <p class="price">280 € par personne</p>
                            <p class="price-details">soit 28€ par personne</p>
                        </div>
                        <div class="tarif-card" data-price="27" data-total="540" data-per-person="true">
                            <h4>Forfait 20 heures (20x1h15)</h4>
                            <p class="price">540 € par personne</p>
                            <p class="price-details">soit 27€ par personne</p>
                        </div>
                    </div>
                </div>

                <div class="tarif-options" id="tarif-groupe-enligne" style="display: none;">
                    <h3>Cours en petit groupe (3-4 personnes) - En visio (Zoom)</h3>
                    <div class="tarif-cards">
                        <div class="tarif-card" data-price="26" data-total="26" data-per-person="true">
                            <h4>1h15</h4>
                            <p class="price">26 € par personne</p>
                        </div>
                        <div class="tarif-card" data-price="25" data-total="250" data-per-person="true">
                            <h4>Forfait 10 heures (10x1h15)</h4>
                            <p class="price">250 € par personne</p>
                            <p class="price-details">soit 25€ par personne</p>
                        </div>
                        <div class="tarif-card" data-price="24" data-total="480" data-per-person="true">
                            <h4>Forfait 20 heures (20x1h15)</h4>
                            <p class="price">480 € par personne</p>
                            <p class="price-details">soit 24€ par personne</p>
                        </div>
                    </div>
                </div>

                <div class="tarif-options" id="tarif-gouter" style="display: none;">
                    <h3>Cours de français autour d'un goûter</h3>
                    <div class="tarif-cards">
                        <div class="tarif-card" data-price="115" data-total="115">
                            <h4>2h</h4>
                            <p class="price">115 €</p>
                        </div>
                    </div>
                </div>

                <div class="tarif-options" id="tarif-petit-dejeuner" style="display: none;">
                    <h3>Cours de français autour d'un petit déjeuner</h3>
                    <div class="tarif-cards">
                        <div class="tarif-card" data-price="115" data-total="115">
                            <h4>2h</h4>
                            <p class="price">115 €</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section date et heure -->
            <div class="section">
                <h2 class="section-title">
                    <i class="far fa-calendar-alt accent-color"></i>
                    Date et heure
                </h2>
                <div class="date-time-row">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <div class="input-with-icon">
                            <input type="date" id="date" placeholder="jj/mm/aaaa">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="time">Heure</label>
                        <div class="select-wrapper">
                            <select id="time">
                                <option value="" selected disabled>Sélectionnez une heure</option>
                                 <option value="9:00">9:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">16:00</option>
                            </select>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section participants -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-users accent-color"></i>
                    Participants
                </h2>
                <div class="participants-counter">
                    <button class="counter-btn decrease">-</button>
                    <span class="counter-value" id="participantsCount">1</span>
                    <button class="counter-btn increase">+</button>
                </div>
            </div>

            <!-- Section paiement -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-credit-card accent-color"></i>
                    Paiement
                </h2>
                <div class="payment-summary">
                    <div class="summary-row">
                        <div class="summary-label">Service</div>
                        <div class="summary-value">-</div>
                    </div>
                    <div class="summary-row">
                        <div class="summary-label">Forfait</div>
                        <div class="summary-value">-</div>
                    </div>
                    <div class="summary-row">
                        <div class="summary-label">Date</div>
                        <div class="summary-value">-</div>
                    </div>
                    <div class="summary-row">
                        <div class="summary-label">Heure</div>
                        <div class="summary-value">-</div>
                    </div>
                    <div class="summary-row">
                        <div class="summary-label">Participants</div>
                        <div class="summary-value">1</div>
                    </div>
                    <div class="summary-row total">
                        <div class="summary-label">Total</div>
                        <div class="summary-value">-</div>
                    </div>
                </div>
                <button class="payment-btn">
                    <i class="fas fa-credit-card"></i>
                    Procéder au paiement
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const serviceSelect = document.getElementById('service');
            const tarifSections = document.querySelectorAll('.tarif-options');
            let selectedTarif = null;
            
            // Gestion du changement de service
            serviceSelect.addEventListener('change', function() {
                const selectedService = this.value;
                
                // Cacher tous les tarifs
                tarifSections.forEach(section => {
                    section.style.display = 'none';
                });
                
                // Afficher le tarif correspondant au service sélectionné
                if (selectedService === 'presentiel') {
                    document.getElementById('tarif-presentiel').style.display = 'block';
                } else if (selectedService === 'enligne') {
                    document.getElementById('tarif-enligne').style.display = 'block';
                } else if (selectedService === 'gouter') {
                    document.getElementById('tarif-gouter').style.display = 'block';
                } else if (selectedService === 'petit-dejeuner') {
                    document.getElementById('tarif-petit-dejeuner').style.display = 'block';
                } else if (selectedService === 'experience') {
                    // Supposons que pour l'expérience culturelle, on montre les options de groupe
                    document.getElementById('tarif-groupe-presentiel').style.display = 'block';
                    document.getElementById('tarif-groupe-enligne').style.display = 'block';
                }
                
                // Mettre à jour le résumé de paiement
                document.querySelector('.summary-row:nth-child(1) .summary-value').textContent = 
                    this.options[this.selectedIndex].text;
                
                // Réinitialiser la sélection de tarif
                document.querySelectorAll('.tarif-card').forEach(card => {
                    card.classList.remove('selected');
                });
                selectedTarif = null;
                document.querySelector('.summary-row:nth-child(2) .summary-value').textContent = '-';
                updateTotal();
            });
            
            // Sélection des cartes de tarif
            document.addEventListener('click', function(e) {
                if (e.target.closest('.tarif-card')) {
                    const card = e.target.closest('.tarif-card');
                    
                    // Désélectionner toutes les cartes
                    document.querySelectorAll('.tarif-card').forEach(c => {
                        c.classList.remove('selected');
                    });
                    
                    // Sélectionner la carte cliquée
                    card.classList.add('selected');
                    selectedTarif = card;
                    
                    // Mettre à jour le résumé
                    document.querySelector('.summary-row:nth-child(2) .summary-value').textContent = 
                        card.querySelector('h4').textContent;
                    
                    updateTotal();
                }
            });
            
            // Gestion du compteur de participants
            const decreaseBtn = document.querySelector('.decrease');
            const increaseBtn = document.querySelector('.increase');
            const counterValue = document.querySelector('.counter-value');
            const participantsDisplay = document.querySelector('.summary-row:nth-child(5) .summary-value');
            
            decreaseBtn.addEventListener('click', function() {
                let count = parseInt(counterValue.textContent);
                if (count > 1) {
                    count--;
                    counterValue.textContent = count;
                    participantsDisplay.textContent = count;
                    updateTotal();
                }
            });
            
            increaseBtn.addEventListener('click', function() {
                let count = parseInt(counterValue.textContent);
                count++;
                counterValue.textContent = count;
                participantsDisplay.textContent = count;
                updateTotal();
            });
            
            // Gestion de la date
            const dateInput = document.getElementById('date');
            dateInput.addEventListener('change', function() {
                document.querySelector('.summary-row:nth-child(3) .summary-value').textContent = this.value;
            });
            
            // Gestion de l'heure
            const timeSelect = document.getElementById('time');
            timeSelect.addEventListener('change', function() {
                document.querySelector('.summary-row:nth-child(4) .summary-value').textContent = this.value;
            });
            
            // Fonction pour mettre à jour le total
            function updateTotal() {
                if (selectedTarif) {
                    const participants = parseInt(counterValue.textContent);
                    let total;
                    
                    // Vérifier si le prix est par personne
                    const isPerPerson = selectedTarif.dataset.perPerson === "true";
                    
                    if (isPerPerson) {
                        // Pour les cours en groupe, utiliser le prix total par personne multiplié par le nombre de participants
                        total = parseFloat(selectedTarif.dataset.total) * participants;
                    } else {
                        // Pour les cours individuels ou autres services, utiliser le prix total comme base
                        // (le prix ne change pas selon le nombre de participants)
                        total = parseFloat(selectedTarif.dataset.total);
                    }
                    
                    document.querySelector('.summary-row.total .summary-value').textContent = total + ' €';
                } else {
                    document.querySelector('.summary-row.total .summary-value').textContent = '-';
                }
            }
        });
    </script>
</body>
</html>